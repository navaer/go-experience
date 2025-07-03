@if ($errors->any())
    @foreach($errors->all() as $error)
        <script>
            toastr.error('{{$error}}', 'Error Alert', {timeOut: 5000})
        </script>
    @endforeach
@endif

@foreach (session('flash_notification', collect())->toArray() as $message)

    @if($message['level'] == 'danger')
        {{$message['level'] = 'error'}}
    @endif

    <script>
        Swal.fire({
            showConfirmButton: false,
            showCancelButton: false,
            title: "{{$message['message']}}",
            text: "{{ucfirst($message['level']) . ' alert'}}",
            icon: "{{$message['level']}}",
            timer: '2000'
        })
    </script>
@endforeach

{{ session()->forget('flash_notification') }}
