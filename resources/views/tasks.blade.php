 {{--resources/views/tasks.blade.php--}}

@extends('layouts.app')


@section('content')

<link
    rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" >
<style >


    body
    {
        text-align: center;
    }
    h1
    {
        background-color: #b3b7bb;
        padding: 30px;

    }

    #task-name{
        position: absolute; /* postulat de départ */
        left: 50%; /* à 50%/50% du parent référent */

    }

    .form-group
    {
        margin-bottom: 0;
        background-color: cornflowerblue;
        padding: 30px;

    }

    button
    {
        background-color: slategray;
        border-radius: 10px;
        border: solid #1b4b72;
        padding: 10px;

    }

    .btn
    {
        background-color: #6574cd;
        position: absolute; /* postulat de départ */
        left : 140%;

    }

    .panel-default
    {
        margin-top: 45px;
    }
</style >

    <div class="panel-body" >
        <!-- Display Validation Errors -->
    @include('common.errors')
        <h1>Liste des taches à accomplir pour rendre ce site plus que classe.</h1>

    <!-- New Task Form -->

        <form action="/task" method="POST" class="form-horizontal" >
        {{ csrf_field() }}

        <!-- Task Name -->

            <div class="form-group" >
                <label for="task" class="col-sm-3 control-label" >Inscrivez ici les nouvelles tâches à réaliser</label >
                <div class="col-sm-6" >
                    <input type="text" name="name" id="task-name" class="form-control" >
                </div >
            </div >

            <!-- Add Task Button -->

            <div class="form-group" >
                <div class="col-sm-offset-3 col-sm-6" >
                    <button type="submit" class="btn btn-default" >
                        <i class="fa fa-plus" ></i > Ajouter
                    </button >
                </div >
            </div >
        </form >
    </div >

    <!-- TODO: Current Tasks -->
    <!-- Current Tasks -->
    @if (count($tasks) > 0)
        <div class="panel panel-default" >
            <div class="panel-heading" >
                <h2>Tâches en cours<h2>
            </div >

            <div class="panel-body" >
                <table class="table table-striped task-table" >

                    <!-- Table Headings -->
                    <thead >
                    <th><h3>Libellé</h3></th >
                    <th>&nbsp;</th >
                    </thead >

                    <!-- Table Body -->
                    <tbody >
                    @foreach ($tasks as $task)
                        <tr >
                            <!-- Task Name -->
                            <td class="table-text" >
                                <div >{{ $task->name }}</div >
                            </td >

                            <td >
                                <!-- TODO: Delete Button -->
                        <tr >
                            <!-- Task Name -->
                            <td class="table-text" >
                                <div >{{ $task->name }}</div >
                            </td >

                            <!-- Delete Button -->
                            <td >
                                <form action="/task/{{ $task->id }}" method="POST" >
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <button >Delete Task</button >
                                </form >
                            </td >
                        </tr >
                        </td>
                        </tr>
                    @endforeach
                    </tbody >
                </table >
            </div >
        </div >
    @endif

@endsection
