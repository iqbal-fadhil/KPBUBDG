<?php
// app/controllers/TasksController.php

// use Input, Redirect, App, View, AppConfig, File;
// use Project, Image, Validator;

class ProjectsController extends BaseController
{
	public function home()
		{
			// tarik data projects
			$projects = Project::get(); 

			return View::make('home', 
			[
				'projects' => $projects  
			]);
		}

	public function create()
	{
			// // tarik data projects
			 	
			return View::make('create', 
			[
				'project' => null  
			]);

		// $input = Input::all();

  //       $project = new Project();

  //       if(!$project->fill($input)->isValid()){
  //           Session::put('error',true);
  //            return Redirect::route('create')->with('errors', $project->getError());

  //       } else {
  //           $project->fill($input);
  //           if (Input::hasFile('picture')){
  //               if (Input::file('picture')->isValid()){
  //                   $file = Input::file('picture');

  //                   $destinationpath = AppConfig::upload_path() . '/foto_proyek';

  //                   if(!File::exists($destinationpath)) {
  //                       File::makeDirectory($destinationpath);
  //                   }

  //                   $extension = Input::file('picture')->getClientOriginalExtension();
  //                   $filename = Input::file('picture')->getClientOriginalName();
  //                   $upload_success = Input::file('picture')->move($destinationpath, $filename);
  //                   if( $upload_success ) {
  //                       $image = Image::make($destinationpath . "/" . $filename)->resize(1920, 960)->save();
  //                       $project->foto_proyek = $filename;
  //                   }
  //               }
  //           }

            
  //           $project->save();
  //           return Redirect::route('home');
  //       }
	}


	public function edit()
		{
			return View::make('edit');
		}

	public function delete()
		{
			return View::make('delete');
		}
}