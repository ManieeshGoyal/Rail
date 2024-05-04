@foreach($statuses as $status)
    <button class="mr-2 btn btn-primary {{ $status->btn_class }}" name="status_id" value="{{ $status->id }}">{{ $status->name }}</button>
@endforeach