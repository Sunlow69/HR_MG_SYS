@extends('layouts.app')

@section('title', 'Generate Payroll - HR')

@section('content')
<div class="main-content">
    <div class="top-header">
        <h2><i class="fas fa-plus"></i> Generate Payroll Cycle</h2>
        <div class="user-profile">
            <div class="user-info">
                <h4>{{ auth()->user()->name }}</h4>
                <span>{{ ucfirst(auth()->user()->role) }}</span>
            </div>
            <img src="{{ auth()->user()->photo_url }}" alt="Profile" class="user-avatar">
        </div>
    </div>

    <div style="margin-bottom: 20px;">
        <a href="{{ route('hr.payroll.index') }}" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Back to Payroll</a>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul style="margin: 0; padding-left: 20px;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Select Employee and Dates</h3>
        </div>
        <div style="padding: 20px;">
            <form method="POST" action="{{ route('hr.payroll.store') }}">
                @csrf

                <div class="form-group" style="margin-bottom: 15px;">
                    <label class="form-label" for="employee_id">Employee</label>
                    <select name="employee_id" id="employee_id" class="form-control" style="background-color: white;" required>
                        <option value="">-- Select Employee --</option>
                        @foreach ($employees as $emp)
                            <option value="{{ $emp->id }}" {{ old('employee_id') == $emp->id ? 'selected' : '' }}>
                                {{ $emp->name }} (Rate: ${{ number_format($emp->hourly_rate ?? 0, 2) }}/hr)
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group" style="margin-bottom: 15px;">
                    <label class="form-label" for="period_start">Period Start Date</label>
                    <input type="date" name="period_start" id="period_start" class="form-control" value="{{ old('period_start') }}" required>
                </div>

                <div class="form-group" style="margin-bottom: 20px;">
                    <label class="form-label" for="period_end">Period End Date</label>
                    <input type="date" name="period_end" id="period_end" class="form-control" value="{{ old('period_end') }}" required>
                </div>

                <button type="submit" class="btn btn-primary"><i class="fas fa-check"></i> Generate Payroll</button>
            </form>
        </div>
    </div>
</div>
@endsection