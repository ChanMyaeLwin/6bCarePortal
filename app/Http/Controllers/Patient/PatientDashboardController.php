<?php
namespace App\Http\Controllers\Patient;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PatientDashboardController extends Controller {
  public function __construct() {
    $this->middleware('auth');
  }
  public function index() {
      dd('Patient');
    return view('admin.dashboard');
  }
}