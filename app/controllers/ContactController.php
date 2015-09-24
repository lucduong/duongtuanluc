<?php

class ContactController extends BaseController {
	public function index() {
		$info = Dounet::find(1);
		return View::make('pages.contact', array('contactInfo' => $info->contact));
	}

	public function adminIndex() {
		$data = Contact::all();
		return View::make('contact.admin-contact', array('contacts' => $data));
	}

	public function adminDelContact($id)
	{
		Contact::destroy($id);
		return Redirect::to('admin/contacts')->with('success','Deleted');
	}

	public function sendContact() {
		$contact = new Contact();
		$contact->name = Input::get('name');
		$contact->email = Input::get('email');
		$contact->phone = Input::get('phone');
		$contact->subject = Input::get('subject');
		$contact->message = Input::get('message');
		$contact->save();

		return Redirect::to('/contact.html')->with('success','Send successful!. Thanks you for send contact!');
	}
	public function adminViewContact($id)
	{
		$contact = Contact::find($id);
		if (!$contact) {
			throw new Exception("Contact does not exist", 1);
		}
		$contact->read =1;
		$contact->save();
		return View::make('contact.admin-viewcontact', array('contact'=>$contact));
	}

	public function adminComposeMsg()
	{
		return View::make('contact.admin-compose-msg');
	}
}