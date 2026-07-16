@extends('layouts.app')

@section('title', 'New Wage Request - HR')

@section('content')
<div class="main-content">
    <div class="top-header">
        <h2><i class="fas fa-plus"></i> Submit Wage Adjustment</h2>
        <div class="user-profile">
            <div class="user-info">
                <h4>{{ auth()->user()->name }}</h4>
                <span>{{ ucfirst(auth()->user()->role) }}</span>
            </div>
            <img src="{{ auth()->user()->photo_url }}" alt="Profile" class="user-avatar">
        </div>
    </div>

    <div style="margin-bottom: 20px;">
        <a href="{{ route('hr.wagerequests.index') }}" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Back to Wage Requests</a>
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
            <h3 class="card-title">Wage Request Details</h3>
        </div>
        <div style="padding: 20px;">
            <form method="POST" action="{{ route('hr.wagerequests.store') }}">
                @csrf

                <div class="form-group" style="margin-bottom: 15px;">
                    <label class="form-label" for="employee_id">Employee</label>
                    <select name="employee_id" id="employee_id" class="form-control" style="background-color: white;" required>
                        <option value="">-- Select Employee --</option>
                        @foreach ($employees as $emp)
                            <option value="{{ $emp->id }}" {{ old('employee_id') == $emp->id ? 'selected' : '' }}>
                                {{ $emp->name }} (Current Rate: ${{ number_format($emp->hourly_rate ?? 0, 2) }}/hr)
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group" style="margin-bottom: 20px;">
                    <label class="form-label" for="new_rate">Proposed Hourly Rate ($)</label>
                    <input type="number" step="0.01" name="new_rate" id="new_rate" class="form-control" placeholder="0.00" value="{{ old('new_rate') }}" required>
                </div>

                <button type="submit" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Submit Request</button>
            </form>
        </div>
    </div>
</div>
@endsection