@extends('admin.master')

@section('title','Department | ' . env('APP_NAME'))

@section('style')
    <style>
        button.btn_remove{
            background: red;
            border: 0;
            color: #fff;
            width: 20px;
            height: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 2px;
            position: relative;
            top: 25px;
            font-size: 12px;
            opacity: .8;
        }

        button.btn_remove:hover{
            opacity: 1;
        }
    </style>
@stop


@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="m-0">Add New Department</h1>
        <a href="#" class="btn btn-primary" onclick="history.back()">Return Back</a>
    </div>

    <div class="text-right">
        <button class="btn btn-success btn-sm my-2" id="add_row">Add Row</button>
    </div>
    <form action="{{ route('admin.departments.store') }}" method="POST">
        @csrf

        <div class="item-wrapper">
            <div class="item">
                <div class="mb-3">
                    <label>English Name</label>
                    <input type="text" name="name_en[]" required placeholder="English Name" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Arabic Name</label>
                    <input type="text" name="name_ar[]" required placeholder="Arabic Name" class="form-control">
                </div>
            </div>

        </div>
        <button class="btn btn-success">Add</button>
    </form>
@stop

@section('script')
    <script>
        let row =`<div class="item">
                <button class="btn_remove"><i class="fas fa-times"></i></button>
                <hr>
                <div class="mb-3">
                    <label>English Name</label>
                    <input type="text" name="name_en[]" required placeholder="English Name" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Arabic Name</label>
                    <input type="text" name="name_ar[]" required placeholder="Arabic Name" class="form-control">
                </div>
            </div>`;

            $('#add_row').click(function(){
                $('.item-wrapper').append(row);
            });

            // $('.btn_remove').click(function(){
            //     alert(55)
            // })

            $('body').on('click','.btn_remove',function(e){
                e.preventDefault();
                $(this).parent().remove();
            })
    </script>

@stop
