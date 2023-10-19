@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="bg-light rounded h-100 p-4">
                <h6>Ubah Jawaban</h6>
                <small class="">Silahkan Ubah Jawaban</small>
                <form method="POST" action="{{ route('update.answers') }}">
                    @csrf
                    <input type="hidden" name="id" value="{{ $answers->id }}">
                    <div class="row mb-3 mt-4">
                        <label for="name" class="col-sm-2 col-form-label">Jawaban</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" autofocus
                                value="{{ $answers->name }}">
                        </div>
                    </div>
                    <div class="row mb-3 mt-4">
                        <label for="questions_id" class="col-sm-2 col-form-label">Pilih Pertanyaan</label>
                        <div class="col-sm-10">
                            <select class="form-select form-select mb-3" id="questions_id" name="questions_id">
                                @foreach ($questions as $question)
                                    @if (old('questions-id', $answers->questions_id) == $question->id)
                                        <option value="{{ $question->id }}"selected> {{ $question->questions_name }}
                                        </option>
                                    @else
                                        <option value="{{ $question->id }}"> {{ $question->questions_name }}
                                        </option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3 mt-4">
                        <label for="value" class="col-sm-2 col-form-label">Nilai</label>
                        <div class="col-sm-10">
                            <select class="form-select form-select mb-3" id="value" name="value">
                                <option value="{{ $answers->value }}" selected>{{ $answers->value }} (Saat ini)</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
