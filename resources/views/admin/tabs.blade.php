@extends('layouts.admin')

@section('title', 'Tabs')

@section('content')
    <main class="admin-main">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <h4>Tabs</h4>
                </div>
            </div>

            <div class="row">
                <div class="col s6">
                    <div class="col s12">
                        <ul class="tabs  z-depth-1">
                            <li class="tab col s3"><a href="#test1">Test 1</a></li>
                            <li class="tab col s3"><a class="active" href="#test2">Test 2</a></li>
                            <li class="tab col s3 disabled"><a href="#test3">Disabled Tab</a></li>
                            <li class="tab col s3"><a href="#test4">Test 4</a></li>
                        </ul>
                    </div>
                    <div id="test1" class="col s12">Test 1</div>
                    <div id="test2" class="col s12">Test 2</div>
                    <div id="test3" class="col s12">Test 3</div>
                    <div id="test4" class="col s12">Test 4</div>
                </div>
                <div class="clearfix"></div>
                <br>
                <br>
                <h5>Fixed Width Tabs<span>Add the <code class="language-markup">.tabs-fixed-width</code> class</span></h5>
                <ul class="tabs tabs-fixed-width tab-demo z-depth-1">
                    <li class="tab"><a href="#test1">Test 1</a></li>
                    <li class="tab"><a class="active" href="#test2">Test 2</a></li>
                    <li class="tab disabled"><a href="#test3">Disabled Tab</a></li>
                    <li class="tab"><a href="#test4">Test 4</a></li>
                    <li class="tab"><a href="#test0">Test 5</a></li>
                </ul>
                <div id="test1" class="col s12"><p>Test 1</p></div>
                <div id="test2" class="col s12"><p>Test 2</p></div>
                <div id="test3" class="col s12"><p>Test 3</p></div>
                <div id="test4" class="col s12"><p>Test 4</p></div>
                <div id="test0" class="col s12"><p>Test 5</p></div>
            </div>
        </div>
    </main>
@endsection


@push('footer-scripts')
    <script type="text/javascript">
        $(document).ready(function(){
//            $('ul.tabs').tabs('select_tab', 'tab_id');
        });
    </script>
@endpush