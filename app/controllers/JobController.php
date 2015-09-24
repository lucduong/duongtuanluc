<?php

use Predis\Helpers;

class JobController extends BaseController {

	public function index() {
		$jobs = DB::table('jobs')
            ->join('jobtypes', 'jobs.type', '=', 'jobtypes.id')
            ->select('jobs.*', 'jobtypes.title as name')
            ->where('jobs.publish', 1)
            ->orderBy('created_at', 'desc')
            ->get();
		return View::make('job.recruiting', array('jobs' => $jobs));
	}

	public function adminIndex() {
		$jobs = DB::table('jobs')
            ->orderBy('created_at', 'desc')
            ->get();
		return View::make('job.admin-jobs', array('jobs' => $jobs));
	}

	public function viewJob($slug){
		$job = job::where('slug', $slug)->first();
		$job = DB::table('jobs')
            ->where('jobs.publish', 1)
            ->where('slug', $slug)
            ->first();
        job::where('id', $job->id)->update(array('view' => $job->view + 1));
		return View::make('job.view-job', array('job' => $job));
	}


	public function adminJobTypes() {
		$jobTypes = DB::table('jobtypes')->orderBy('title', 'asc')->get();
		return View::make('job.admin-jobtypes', array('jobTypes' => $jobTypes));
	}

	public function adminAddJobType() {
		$rules = array('title' => 'required');
		$validator = Validator::make(Input::all(), $rules);

		if($validator->passes()) {
			$title = Input::get('title');
			$jobType = JobType::where('title', $title)->get();

			if (!$jobType->isEmpty()) {
				return Redirect::to('admin/job-type')->withErrors(['This job type is existed']);
			} else {
				$jobType = new JobType();
				$jobType->title = $title;
				$jobType->description = Input::get('description');
				$jobType->save();
				return Redirect::to('admin/job-type')->with('success', 'Job type was saved successfully!');
			}
		}

		return Redirect::to('admin/job-type')->withErrors($validator);
	}

	public function adminEditJobType($id) {
		$jobType = JobType::find($id);
		if (!$jobType) {
			throw new Exception("Job type does not exist.", 1);
		}

		if (Request::isMethod('POST')) {
			$rules = array('title' => 'required');
			$validator = Validator::make(Input::all(), $rules);
			if ($validator->passes()) {
				$jobType->title = Input::get('title');
				$jobType->description = Input::get('description');
				$jobType->save();
				return Redirect::to('admin/job-type')->with('success', 'Job type was saved successfully!');
			}
			return Redirect::to('admin/job-type')->withErrors($validator);
		} else {
			$jobTypes = DB::table('jobtypes')->orderBy('title', 'asc')->get();
			return View::make('job.admin-jobtypes', array('jobTypes' => $jobTypes, 'jobType' => $jobType));
		}
	}


	public function adminAddJob() {
		if (Request::isMethod('POST')) {
			$rules = array('title' => 'required', 'content' => 'required', 'description' => 'required');
			$validator = Validator::make(Input::all(), $rules);
			$image = Input::file('image');
			$imageUrl = "";

			//check if user have select for upload image
			if($image!=null){ //yes - have select file
				$mime = $image->getClientMimeType();
				if($mime=='image/jpeg'){
					$ext = '.jpg';
				}
				else{	
					$ext = '.png';
				}
				$rand_str = ' '.str_random(10).' '.time();
				$file_name = Input::get('name').$rand_str;
				$file_name_final = Str::slug($file_name,'-').$ext;
				
				// upload file
				$image_path = base_path().'/media/jobs/'.date('Y-m');
				if(!file_exists($image_path)){
					// create folder if it is not exist
					mkdir($image_path);
					$image->move('media/jobs/'.date('Y-m').'/',$file_name_final);

				}
				else{
					$image->move('media/jobs/'.date('Y-m').'/',$file_name_final);
				}

				$imageUrl = 'media/jobs/' . date('Y-m').'/'.$file_name_final;
			}
			var_dump($imageUrl);
			if($validator->passes()){
				$job = new Job();
				$job->title = Input::get('title');
				$job->type = Input::get('jobtype');
				$job->image_url = $imageUrl;
				$job->description = Input::get('description');
				$job->due_date = Input::get('duedate');
				$job->content = Input::get('content');
				$job->slug = Helpers::getSlug($job->title, $job);
				$job->save();
				return Redirect::to('admin/jobs')->with('success','Saved');
			}
			return Redirect::to('admin/add-job')->withErrors($validator);
		} else {
			$jobTypes = DB::table('jobtypes')->orderBy('title', 'asc')->get();
			return View::make('job.admin-add-job', array('jobTypes' => $jobTypes));
		}
	}

	public function adminDeleteJob($id) {
		Job::destroy($id);
		return Redirect::to('admin/jobs')->with('success','Deleted');
	}

	public function adminEditJob($id) {
		$job = Job::find($id);
		if (!$job) {
			throw new Exception("Job does not exist.", 1);
		}

		if (Request::isMethod('POST')) {
			$rules = array('title' => 'required', 'content' =>'required', 'description' => 'required');
			$validator = Validator::make(Input::all(), $rules);
			if ($validator->passes()) {
				$job->title = Input::get('title');
				$job->due_date = Input::get('duedate');
				$job->content = Input::get('content');
				$job->description = Input::get('description');
				$job->type = Input::get('jobtype');
				$job->slug = Helpers::getSlug($job->title, $job);
				$job->save();
				return Redirect::to('admin/jobs')->with('success', 'Job was saved successfully!');
			}
			return Redirect::to('admin/jobs')->withErrors($validator);
		} else {
			$jobTypes = DB::table('jobtypes')->orderBy('title', 'asc')->get();
			return View::make('job.admin-edit-job', array('jobTypes' => $jobTypes, 'job' => $job));
		}
	}
}