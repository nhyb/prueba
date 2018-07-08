@extends('layouts.app')

@section('content')
<div class="content-padder content-background">
<div class="uk-section-small uk-section-default header">
    <div class="uk-container uk-container-large">
        <h1><span class="ion-speedometer"></span> Departamentos </h1>
    </div>
</div>
<div class="uk-section-small">
    <div class="uk-container uk-container-large">
        <div uk-grid class="uk-child-width-1-1@s uk-child-width-1-2@m uk-child-width-1-4@xl">
            <div>
                <div class="uk-card uk-card-default uk-card-body">
                    <span class="statistics-text">Ordenes Pendientes </span><br />
                    <span class="statistics-number">
                        #
                        <span class="uk-label uk-label-success">
                            #% <span class="ion-arrow-up-c"></span>
                        </span>
                    </span>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-body">
                    <span class="statistics-text">Gastos Común</span><br />
                    <span class="statistics-number">
                        Agua
                        <span class="uk-label uk-label-danger">
                            % (pagado) <span class="ion-arrow-down-c"></span>
                        </span><br/>
                    </span>
                    <span class="statistics-number">
                        Copelec
                        <span class="uk-label uk-label-danger">
                            13% pagado <span class="ion-arrow-down-c"></span>
                        </span>
                    </span>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-body">
                    <span class="statistics-text">Ordenes a la Propiedad</span><br />
                    <span class="statistics-number">
                        #
                        <span class="uk-label uk-label-success">
                            #% <span class="ion-arrow-up-c"></span>
                        </span>
                    </span>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-body">
                    <span class="statistics-text">Disponiblidad</span><br />
                    <span class="statistics-number">
                        #
                        <span class="uk-label uk-label-success">
                            #% <span class="ion-arrow-up-c"></span>
                        </span>
                    </span>
                </div>
            </div>
        </div>
        <div uk-grid class="uk-child-width-1-1@s uk-child-width-1-2@l">
            <div>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-header">
                        Ocupado
                    </div>
                    <div class="uk-card-body">
                        <canvas id="chart1"></canvas>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-header">
                        Copelec medidor
                    </div>
                    <div class="uk-card-body">
                        <canvas id="chart2"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
