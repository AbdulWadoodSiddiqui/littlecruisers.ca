<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Mail\BookTourMail;
use Illuminate\Support\Facades\Mail;

class BookTourController extends Controller
{
    public function bookTourEmail(Request $request): RedirectResponse
    {
        try {
            $data = [
                'name' => $request->bat_name,
                'number' => $request->bat_number,
                'email' => $request->bat_email,
                'date' => $request->bat_date,
                'time' => $request->bat_time,
                'child_one' => $request->bat_child_one_age,
                'child_two' => $request->bat_child_two_age ?? '',
                'child_three' => $request->bat_child_three_age ?? '',
                'template' => 'emails.book_a_tour',
                'subject' => 'Book a tour email from website'
            ];

            Mail::to(env('MAIL_FROM_ADDRESS'))->send(new BookTourMail($data));
            return redirect()->back()->with('success', 'Your request has been successfully sent.');
        } catch (\Exception $e) {
            report($e);
            return redirect()->back()->with('error', 'Something went wrong. Please try again later.');
        }
    }

    public function getInTouchEmail(Request $request): RedirectResponse
    {
        try {
            $data = [
                'parent_first_name' => $request->git_parent_first_name,
                'parent_last_name' => $request->git_parent_last_name,
                'email' => $request->git_email,
                'number' => $request->git_number,
                'child_one_first_name' => $request->git_child_one_first_name,
                'child_one_last_name' => $request->git_child_one_last_name,
                'child_one_dob' => $request->git_child_one_dob,
                'additional_comments' => $request->git_additional_comments ?? '',
                'template' => 'emails.get_in_touch',
                'subject' => 'Get in touch email from website'
            ];

            Mail::to(env('MAIL_FROM_ADDRESS'))->send(new BookTourMail($data));
            return redirect()->back()->with('success', 'Your request has been successfully sent.');
        } catch (\Exception $e) {
            report($e);
            return redirect()->back()->with('error', 'Something went wrong. Please try again later.');
        }
    }

    public function careerEmail(Request $request): RedirectResponse
    {
        try {
            $data = [
                'first_name' => $request->career_first_name,
                'last_name' => $request->career_last_name,
                'email' => $request->career_email_address,
                'phone' => $request->career_phone_number,
                'desired_position' => $request->career_desired_position,
                'addition_comments' => $request->career_addition_comments ?? '',
                'template' => 'emails.career',
                'subject' => 'Career email from website'
            ];

            $resume = $request->hasFile('career_attach_resume') ? $request->file('career_attach_resume') : null;
            $coverLetter = $request->hasFile('career_cover_letter') ? $request->file('career_cover_letter') : null;

            Mail::to(env('MAIL_FROM_ADDRESS'))->send(new BookTourMail($data, $resume, $coverLetter));
            return redirect()->back()->with('success', 'Your request has been successfully sent.');
        } catch (\Exception $e) {
            report($e);
            return redirect()->back()->with('error', 'Something went wrong. Please try again later.');
        }
    }
}
