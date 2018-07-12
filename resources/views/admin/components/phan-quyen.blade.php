@extends('admin.admin-master')
@section('content')
    <div class="content-wrapper">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Library</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data</li>
            </ol>
        </nav>
        <div class="row mb-2">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Bảng phân quyền</h5>
                        <div class="table-responsive">
                            <table class="table center-aligned-table">
                                <thead>
                                <tr>
                                    <th>stt</th>
                                    <th>Mã phân quyền</th>
                                    <th>Tên phân quyền</th>
                                    <th>Trạng thái</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody id="print">

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            getTable()
        });
        $('#print').on('change','.example-reversed', function () {
            var t= $(this).closest('tr').find('.id').text()
            var status=this.value;
            console.log(status)
            $.ajax({
                type: "POST",
                url: "{{ route('changehienthi') }}",
                data: {
                    'id':t,
                    'hienthi':status,
                    '_token':"{{ csrf_token() }}"
                },
                success: function (response) {
                    if(response=='ok')
                    {
                        getTable()
                    }
                    else
                        alert('errors')
                }
            });
        });
        $('#print').on('click','.btn-sm', function (e) {
            var t= $(this).closest('tr').find('.id').text()
            $.ajax({
                type: "post",
                url: "{{ route('deletephanquyen') }}",
                data: {
                    '_token':"{{ csrf_token() }}",
                    'id':t
                },
                success: function (response) {
                    if(response=='ok')
                    {
                        getTable()
                    }
                    else
                    {
                        alert('errors');
                    }
                }
            });
        });
        function getTable() {
            $.ajax({
                type: "get",
                url: "{{ route('ajaxtable') }}",
                success: function (response) {
                    $("#print").html(response)
                }
            });
        }
    </script>
@endsection