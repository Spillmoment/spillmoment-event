<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventCategory;
use App\Models\EventRegister;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function index(Request $request)
    {
		// initial for select
		$category = EventCategory::all();
		$status = Event::where('status', 'online')
			->orWhere('status', 'offline')
			->groupBy('status')
			->get();
		$type = Event::where('type', 'paid')
			->orWhere('type', 'free')
			->groupBy('type')
			->get();
		// ---------------

		// $key_category = $request->query('category');
		// $key_status = $request->query('status');

		// $event = Event::with('category')
		// 			->whereHas('category', function ($query) use ($key_category) {
		// 					$query->where('slug', $key_category);
		// 			})
		// 			->where('status', $key_status)
		// 			->get();

		// dd($event);
		$event = Event::all();
		return view('pages.event.index', [
			'category' => $category,
			'events' => $event,
			'status' => $status,
			'type' => $type
		]);

    }

	 public function filter(Request $request)
	 {
		if($request->ajax()){
			$output="";

			// $events = Event::query()->with('category')
			// 					->when($request->has('category'), function ($query) use ($request) {
			// 						$query->whereHas('category', function ($query2) use ($request) {
			// 							return $query2->where('slug', $request->category);
			// 						});
			// 					})
								// ->when($request->has('status'), function ($query) use ($request) {
								// 	return $query->where('status', $request->status);
								// }, function (){ return null; })
								// ->when($request->has('type'), function ($query) use ($request) {
								// 	$query->where('type', $request->type);
								// })
								// ->get();


				if ($request->category && $request->status && $request->type) {
					$events = Event::with('category')
								->whereHas('category', function ($query) use ($request) {
										return $query->where('slug', $request->category);
								})
								->where('status', $request->status)
								->where('type', $request->type)
								->get();
				} 

				// if ($request->category && $request->status) {
				// 	$events = Event::with('category')
				// 				->whereHas('category', function ($query) use ($request) {
				// 						return $query->where('slug', $request->category);
				// 				})
				// 				->where('status', $request->status)
				// 				->get();
				// } 
				
				// if ($request->category && $request->type) {
				// 		$events = Event::with('category')
				// 					->whereHas('category', function ($query) use ($request) {
				// 							return $query->where('slug', $request->category);
				// 					})
				// 					->where('type', $request->type)
				// 					->get();
				// } 
				// if($request->category) {
				// 	$events = Event::with('category')
				// 				->whereHas('category', function ($query) use ($request) {
				// 					return $query->where('slug', $request->category);
				// 				})
				// 				->get();
				// }

				// if($request->status) {
				// 	$events = Event::with('category')
				// 					->where('status', $request->status)
				// 					->get();
				// }

				// if($request->type) {
				// 	$events = Event::with('category')
				// 					->where('type', $request->type)
				// 					->get();
				// }
				

			if($events)
			{
				foreach ($events as $key => $event) {

					// Conditional rendering tag------
					if ($event->started == '0'){
						$started_label = "<button class='badge'>
								<i class='fas fa-stopwatch'></i> <label> Belum dimulai</label>
						</button>";
					}else{
						$started_label = "<button class='badge'>
								<i class='fas fa-stopwatch'></i> <label> Telah dimulai</label>
						</button>";
					}

					if ($event->type == 'paid'){
						$type_label = "<button class='badge paid'>
								<i class='fas fa-wallet'></i> <label>Berbayar</label>
						</button>";
					}else{
						$type_label = "<button class='badge paid'>
								<i class='fas fa-wallet'></i> <label>Gratis</label>
						</button>";
					}

					$event_date = $event->event_date->format('d F Y');
					$event_time = $event->start_time->format('h:i');

					if ($event->status == 'offline'){
						$event_status_label = "<label for=''>Offline</label>";
					}else{
						$event_status_label = "<label for=''>Online</label>";
					}
					// ----------------------------

					$output.="<div class='col'>
									<div class='card'>
										<img style='width: 100%;
										box-sizing: border-box;
										height: 200px;
										-o-object-fit: cover;
										object-fit: cover;' src='{{ asset('uploads/events/' . $event->photo) }}' class='card-img-top'
											alt='$event->title'>
										<div class='card-body'>
											<a href='event/detail/$event->slug' class='text-decoration-none'>
													<h4 class='card-title' style='font-size: 20px;
											color: #333;'>$event->title</h4>
											</a>
											<div class='wrapper-card'>
													<div class='content-card'>
														$started_label
														$type_label
														<br>
														<span class='info-tanggal'>
															<i class='fas fa-calendar-alt'></i> 
															<label for=''>$event_date</label>
														</span><br>
														<span class='info-jam'>
															<i class='fas fa-clock'></i>
															<label for=''>$event_time</label> WIB
														</span><br>
														<span class='info-anggota'>
															<i class='fas fa-laptop'></i>
															$event_status_label
														</span>
														<br>
													</div>
											</div>
											<br>
											<a href='event/detail/$event->slug' class='btn btn-event w-100'>Detail </a>
					
										</div>
									</div>
							</div>";
				}
				return Response($output);
			}

		}
			
	 }

    public function detail($slug)
    {
        $event = Event::where('slug', $slug)->first();
        $register = EventRegister::where('event_id', $event->id)->count();
		  $cek_state = EventRegister::where('event_id', $event->id)->where('user_id', Auth::id())->count();
		  
        return view('pages.event.detail', [
            'events' => $event,
            'registers' => $register,
				'cek_state' => $cek_state
        ]);
    }

	 public function join($event_id)
	 {
		$current_quota = Event::find($event_id);
		$update_quota = $current_quota->quota - 1;
		$join_event = EventRegister::create([
			'event_id' => $event_id,
			'user_id' => Auth::id()
		]);

		if($join_event){
			Event::where('id', $event_id)
					->update(['quota' => $update_quota]);

			return back()->with('status', 'Join success.');
		}
	 }
}
