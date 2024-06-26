@extends('layouts.landing')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>{{ __("Form ") }} {{ ucfirst($title) }}</h4>
            </div>
            <div class="card-body">
                <div class="row mt-4">
                    <div class="col-12 col-lg-8 offset-lg-2">
                        @include('guest.components.wizard_step')
                    </div>
                </div>

                @include('guest.components.wizard_1', ["wizard" => 1])
                @include('guest.components.wizard_2', ["wizard" => 2])
                @include('guest.components.wizard_3', ["wizard" => 3])
            </div>
        </div>
    </div>
</div>
@endsection

@include('import.datatable')
@push('scripts')
    <script>
        $(document).ready(function () {
            hideWizard(2);
            hideWizard(3);
            $(".categorySymptomCheckbox").prop("checked", false);
        });

        function showWizard(id, datas = null) {
            var target = "wizard"+id
            var step = "#wizardStep"+id

            if (id === 3 && datas !== null) {
                // var target = document.getElementById('#result')
                var content = '';
                $.each(datas['process'], function (indexInArray, data) { 
                    content += '<div class="row d-flex justify-content-center">'
                    content += '<div class="col-auto">'
                    content += '<div class="result">'
                    content += '<div class="pricing">'
                    content += '<div class="pricing-title">'
                    content += 'Hasil Diagnosa'
                    content += '</div>'
                    content += '<div class="pricing-padding">'
                    content += '<div class="pricing-price">'
                    content += '<div>' + data.category + '</div>'
                    content += '<div>' + data.description + '</div>'
                    content += '</div>'
                    content += '</div>'
                    content += '</div>'
                    content += '</div>'
                    content += '</div>'
                    content += '</div>'
                });
                $('#result').append(content);
                hideWizard(2, false);
            }
            document.getElementById(target).style.display = 'block';
            $(step).addClass('wizard-step-active');

        }
        
        function hideWizard(id, condition = true) {
            var target = "wizard"+id
            var step = "#wizardStep"+id
            document.getElementById(target).style.display = 'none';
            if (condition) {
                $(step).removeClass('wizard-step-active');
            }
        }

        function buttonDetail(id) {
           console.log('masuk'); 
           console.log(id); 
        }
    </script>
@endpush
