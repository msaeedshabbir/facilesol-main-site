@extends('backend.layouts.main')
@section('title', 'Add FAQ')
@section('main-container')
            <div class="container-fluid">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <a href="{{url('/admin/faqs')}}"><button class="btn btn-primary">FAQs List</button></a></a>
                    </div>
                    <div class="card-body">
                        <form method="post" action="faq-add-script.php" enctype="multipart/form-data">
                            <div class="form-floating mb-3">
                                <label for="question">Question</label>
                                <input class="form-control" id="question" type="text" placeholder="Enter Question" name="TxtQuestion"/>
                            </div>
                            <div class="form-floating mb-3">
                                <label for="answer">Answer</label>
                                <input class="form-control" id="answer" type="text" placeholder="Enter Answer" name="TxtAnswer"/>
                            </div>
                            <div class="mt-4 mb-0">
                                <div class="d-grid">
                                    <input class="btn btn-primary btn-block" type="submit" value="Submit" name="BtnSubmit">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
