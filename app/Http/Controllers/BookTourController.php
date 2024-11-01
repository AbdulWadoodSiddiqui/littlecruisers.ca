<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Mail\BookTourMail;
use Illuminate\Support\Facades\Mail;

class BookTourController extends Controller
{
    /**
     * Handle "Book a Tour" email.
     */
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
            return redirect()->back()->with('success', 'Your request has been successfully sent. Our team will get back to you as soon as possible.');
        } catch (\Exception $e) {
            report($e);  // Log the exception instead of dumping it
            return redirect()->back()->with('error', 'Something went wrong. Please try again later.');
        }
    }

    /**
     * Handle "Get in Touch" email.
     */
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
                'child_two_first_name' => $request->git_child_two_first_name ?? '',
                'child_two_last_name' => $request->git_child_two_last_name ?? '',
                'child_two_dob' => $request->git_child_two_dob ?? '',
                'child_three_first_name' => $request->git_child_three_first_name ?? '',
                'child_three_last_name' => $request->git_child_three_last_name ?? '',
                'child_three_dob' => $request->git_child_three_dob ?? '',
                'additional_comments' => $request->git_additional_comments ?? '',
                'template' => 'emails.get_in_touch',
                'subject' => 'Get in touch email from website'
            ];

            Mail::to(env('MAIL_FROM_ADDRESS'))->send(new BookTourMail($data));
            return redirect()->back()->with('success', 'Your request has been successfully sent. Our team will get back to you as soon as possible.');
        } catch (\Exception $e) {
            report($e);  // Log the exception instead of dumping it
            return redirect()->back()->with('error', 'Something went wrong. Please try again later.');
        }
    }

    /**
     * Handle "Career" email with attachments.
     */
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

            // Attachments handling
            $attachments = [];
            if ($request->hasFile('career_attach_resume')) {
                $attachments['resume'] = $request->file('career_attach_resume')->getPathname();
            }
            if ($request->hasFile('career_cover_letter')) {
                $attachments['cover_letter'] = $request->file('career_cover_letter')->getPathname();
            }

            Mail::to(env('MAIL_FROM_ADDRESS'))->send(new BookTourMail($data, $attachments));
            return redirect()->back()->with('success', 'Your request has been successfully sent. Our team will get back to you as soon as possible.');
        } catch (\Exception $e) {
            report($e);  // Log the exception instead of dumping it
            return redirect()->back()->with('error', 'Something went wrong. Please try again later.');
        }
    }
}
