
@extends('adminlayout')

@section('title', 'dashboard')

@section('page-title', 'داشبورد مدیریت')

@section('content')

    <div class="row">

        <div class="col-lg-3 col-6">
            <div class="small-box text-bg-primary">
                <div class="inner">
                    <h3>150</h3>
                    <p>تعداد مطالب</p>
                </div>
                <i class="bi bi-file-earmark-text small-box-icon"></i>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box text-bg-success">
                <div class="inner">
                    <h3>44</h3>
                    <p>تعداد کاربران</p>
                </div>
                <i class="bi bi-people small-box-icon"></i>
            </div>
        </div>



    </div>

@endsection
