@extends('layouts.app')

@section('content') 
{{--     <aside class="projectNav">
        <ul>
            <h2>Projects</h2>
            <li>
                <a href="" class="active">
                    Mærsk
                </a>
            </li>
            <li>
                <a href="">
                    Ikea
                </a>
            </li>
            <li>
                <a href="">
                    Mega langt projektnavn
                </a>
            </li>
        </ul>
    </aside> --}}
    <main class="main">
        <section class="box col s6 tasks">
            <h1>Mærsk</h1>
        </section>
        <section class="box col s6 timer">
            <section class="timerTop">
                <div>
                    <h2>Agenda</h2>
                </div>
                <div class="addTaskDone">
                    <a href="#">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                    </a>
                </div>
            </section>
            <article class="task">
                <div>
                    <h4>Design ny header til kampagnesite</h4>
                    <p>Mærsk</p>
                </div>
                <div>
                    <h5>21:54</h5>
                </div>
                <div class="pause">
                    <i class="fa fa-pause-circle " aria-hidden="true"></i>
                    <i class="fa fa-stop-circle" aria-hidden="true"></i>
                </div>
            </article>
            <article class="task">
                <div>
                    <h4>Møde - Stå op møde</h4>
                    <p>Internt</p>
                </div>
                <div>
                    <h5>00:00</h5>
                </div>
                <div class="start">
                    <i class="fa fa-play-circle" aria-hidden="true"></i>
                    <i class="fa fa-stop-circle" aria-hidden="true"></i>
                </div>
            </article>
            <article class="task">
                <div>
                    <h4>Se på banner til facebook</h4>
                    <p>IKEA</p>
                </div>
                <div>
                    <h5>00:00</h5>
                </div>
                <div class="start">
                    <i class="fa fa-play-circle start" aria-hidden="true"></i>
                    <i class="fa fa-stop-circle" aria-hidden="true"></i>
                </div>
            </article>
        </section>
    </main>
@endsection
