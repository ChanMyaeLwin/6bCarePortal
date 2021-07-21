<?php
namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DoctorDashboardController extends Controller {
  public function __construct() {
    $this->middleware('auth');
  }
  public function index() {
      dd('doctor');
    return view('admin.dashboard');
  }
}