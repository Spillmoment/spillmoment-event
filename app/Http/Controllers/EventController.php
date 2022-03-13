<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventCategory;
use App\Models\EventRegister;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

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

		$event = Event::all();
		return view('pages.event.index', [
			'category' => $category,
			'events' => $event,
			'status' => $status,
			'type' => $type
		]);
	}

	public function kategoriGetAutocomplete(Request $request)
	{
		$data = [];
		if ($request->has('q')) {
			$cari = $request->q;
			$data = EventCategory::select('id', 'name', 'slug')->where('name', 'LIKE', '%' . $cari . '%')->get();
		}
		return response()->json($data);
	}
	
	public function partnerGetAutocomplete(Request $request)
	{
		$data = [];
		if ($request->has('q')) {
			$cari = $request->q;
			$data = Partner::select('id', 'name', 'slug', 'address')
									->where(function($query) use ($cari) {
										$query->where('name', 'LIKE', '%'.$cari.'%')
											->orWhere('address', 'LIKE', '%'.$cari.'%');
									})			
									->get();
		}
		return response()->json($data);
	}

	public function filter(Request $request)
	{
		if ($request->ajax()) {
			$output = "";

			$REQ_CATEGORY = $request->category;
			$REQ_STATUS = $request->status;
			$REQ_TYPE = $request->type;
			$REQ_PARTNER = $request->partner;

			if ($REQ_CATEGORY == null) {
				$events = Event::with(['category','partner'])
					->where('status', $request->status)
					->where('type', $request->type)
					->whereHas('partner', function ($query) use ($request) {
						return $query->where('slug', $request->partner);
					})
					->get();
			}

			if ($REQ_STATUS == null) {
				$events = Event::with(['category','partner'])
					->whereHas('category', function ($query) use ($request) {
						return $query->where('slug', $request->category);
					})
					->where('type', $request->type)
					->whereHas('partner', function ($query) use ($request) {
						return $query->where('slug', $request->partner);
					})
					->get();
			}

			if ($REQ_TYPE == null) {
				$events = Event::with(['category','partner'])
					->whereHas('category', function ($query) use ($request) {
						return $query->where('slug', $request->category);
					})
					->where('status', $request->status)
					->whereHas('partner', function ($query) use ($request) {
						return $query->where('slug', $request->partner);
					})
					->get();
			}
			
			if ($REQ_PARTNER == null) {
				$events = Event::with(['category','partner'])
					->whereHas('category', function ($query) use ($request) {
						return $query->where('slug', $request->category);
					})
					->where('status', $request->status)
					->where('type', $request->type)
					->get();
			}

			if ($REQ_CATEGORY == null && $REQ_STATUS == null) {
				$events = Event::with(['category','partner'])
					->where('type', $request->type)
					->whereHas('partner', function ($query) use ($request) {
						return $query->where('slug', $request->partner);
					})
					->get();
			}

			if ($REQ_CATEGORY == null && $REQ_TYPE == null) {
				$events = Event::with(['category','partner'])
					->where('status', $request->status)
					->whereHas('partner', function ($query) use ($request) {
						return $query->where('slug', $request->partner);
					})
					->get();
			}
			
			if ($REQ_CATEGORY == null && $REQ_PARTNER == null) {
				$events = Event::with(['category','partner'])
					->where('status', $request->status)
					->where('type', $request->type)
					->get();
			}
			
			if ($REQ_STATUS == null && $REQ_TYPE == null) {
				$events = Event::with(['category','partner'])
					->whereHas('category', function ($query) use ($request) {
						return $query->where('slug', $request->category);
					})
					->whereHas('partner', function ($query) use ($request) {
						return $query->where('slug', $request->partner);
					})
					->get();
			}
			
			if ($REQ_STATUS == null && $REQ_PARTNER == null) {
				$events = Event::with(['category','partner'])
					->whereHas('category', function ($query) use ($request) {
						return $query->where('slug', $request->category);
					})
					->where('type', $request->type)
					->get();
			}
			
			if ($REQ_TYPE == null && $REQ_PARTNER == null) {
				$events = Event::with(['category','partner'])
					->whereHas('category', function ($query) use ($request) {
						return $query->where('slug', $request->category);
					})
					->where('status', $request->status)
					->get();
			}

			if ($REQ_STATUS == null && $REQ_TYPE == null && $REQ_PARTNER == null) {
				$events = Event::with(['category','partner'])
					->whereHas('category', function ($query) use ($request) {
						return $query->where('slug', $request->category);
					})
					->get();
			}

			if ($REQ_CATEGORY == null && $REQ_TYPE == null && $REQ_PARTNER == null) {
				$events = Event::with(['category','partner'])
					->where('status', $request->status)
					->get();
			}

			if ($REQ_CATEGORY == null && $REQ_STATUS == null && $REQ_PARTNER == null) {
				$events = Event::with(['category','partner'])
					->where('type', $request->type)
					->get();
			}
			
			if ($REQ_CATEGORY == null && $REQ_STATUS == null && $REQ_TYPE == null) {
				$events = Event::with(['category','partner'])
					->whereHas('partner', function ($query) use ($request) {
						return $query->where('slug', $request->partner);
					})
					->get();
			}

			if ($REQ_CATEGORY == null && $REQ_STATUS == null && $REQ_TYPE == null && $REQ_PARTNER == null) {
				$events = Event::with(['category','partner'])->get();
			}
			
			if ($REQ_CATEGORY != null && $REQ_STATUS != null && $REQ_TYPE != null && $REQ_PARTNER != null) {
				$events = Event::with(['category','partner'])
					->whereHas('category', function ($query) use ($request) {
						return $query->where('slug', $request->category);
					})
					->where('status', $request->status)
					->where('type', $request->type)
					->whereHas('partner', function ($query) use ($request) {
						return $query->where('slug', $request->partner);
					})
					->get();
			}


			if ($events) {
				foreach ($events as $key => $event) {

					// Conditional rendering tag------
					if ($event->started == '0') {
						$started_label = "<button class='badge'>
								<i class='fas fa-stopwatch'></i> <label> Belum dimulai</label>
						</button>";
					} else {
						$started_label = "<button class='badge'>
								<i class='fas fa-stopwatch'></i> <label> Telah dimulai</label>
						</button>";
					}

					if ($event->type == 'paid') {
						$type_label = "<button class='badge paid'>
								<i class='fas fa-wallet'></i> <label>Berbayar</label>
						</button>";
					} else {
						$type_label = "<button class='badge paid'>
								<i class='fas fa-wallet'></i> <label>Gratis</label>
						</button>";
					}

					$event_date = $event->event_date->format('d F Y');
					$event_time = $event->start_time->format('h:i');

					if ($event->status == 'offline') {
						$event_status_label = "<label for=''>Offline</label>";
					} else {
						$event_status_label = "<label for=''>Online</label>";
					}
					// ----------------------------

					$output .= "<div class='col'>
									<div class='card'>
										<img style='width: 100%;
										box-sizing: border-box;
										height: 200px;
										-o-object-fit: cover;
										object-fit: cover;' src='uploads/events/$event->photo' class='card-img-top'
											alt='$event->title'>
										<div class='card-body'>
											<a href='event/detail/$event->slug' class='text-decoration-none'>
												<h4 class='card-title' style='font-size: 20px; color: #333;'> 
												" . Str::limit($event->title, 30) . " 
												</h4>
											</a>
											<br>
											<div class='wrapper-card'>
													<div class='content-card'>
														$started_label
														$type_label
														<br>
														<br>
														<span class='info-tanggal'>
															<i class='fas fa-calendar-alt'></i>
															<label for=''>$event_date</label>
														</span>
														<br>
														<span class='info-jam'>
															<i class='fas fa-clock'></i>
															<label for=''>$event_time</label> WIB
														</span>
														<br>
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

		$pay = null;
		if ($current_quota->type == 'paid') {
			$pay = 'pending';
		}

		$join_event = EventRegister::create([
			'event_id' => $event_id,
			'user_id' => Auth::id(),
			'pay_status' => $pay
		]);

		if ($join_event) {
			Event::where('id', $event_id)
				->update(['quota' => $update_quota]);

			return back()->with('status', 'Join success.');
		}
	}
}
