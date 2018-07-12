@extends('admin.admin-master')
@section('content')
    <div class="content-wrapper">
        <h3 class="page-heading mb-4">Form validation</h3>
        <div class="row mb-2">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Thêm phân quyền</h5>
                        <form class="cmxform" id="commentForm" method="post" action="">
                            <fieldset>
                                @csrf
                                <div id="messages">

                                </div>


                                <div class="form-group">
                                    <label for="cname">Tên phân quyền</label>
                                    <input id="cname" class="form-control" name="tenphanquyen" minlength="2" type="text"
                                           required>
                                </div>
                                <input class="btn btn-primary" type="button" value="Submit">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {

        });
        $(".btn-primary").click(function () {
            var data=$('#commentForm').serialize()
            $.ajax({
                type: "post",
                url: "{{ route('them-moi') }}",
                data: data,
                success: function (response) {
                    $('#messages').show()
                    $('#messages').html('')
                    if(response=='success')
                    {

                        $('#messages').html( '<div class="alert alert-success" role="alert">Insert success </div>')
                    }
                    else{
                        $('#messages').html( '<div class="alert alert-danger" role="alert">'+response.error+' </div>')
                    }
                    setTimeout(function(){
                        $('#messages').hide()
                        }, 5000);


                }
            });
        });

    </script>
@endsection