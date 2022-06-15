@extends('forum.struct')
@section('content')
    <main id="tt-pageContent">
    <div class="container">
        <div class="tt-wrapper-inner">
            <h1 class="tt-title-border">
                Create New Topic
            </h1>
            <form class="form-default form-create-topic">



                <div class="pt-editor">
                    <h6 class="pt-title">Topic </h6>

                    <div class="form-group">
                        <textarea name="message" class="form-control" rows="5" placeholder="Lets get started"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputTopicTitle">Category</label>
                                <select class="form-control">
                                    <option value="Select">Select</option>
                                    <option value="Value 01">depression</option>
                                    <option value="Value 02">bullying</option>
                                    <option value="Value 02">discrimination</option>
                                    <option value="Value 02">intimidation</option>
                                    <option value="Value 02">hazing</option>
                                    <option value="Value 02">abuse</option>
                                    <option value="Value 02">anxiety</option>
                                    <option value="Value 02">eating disorders</option>
                                    <option value="Value 02">stress</option>
                                    <option value="Value 02">suicidal Thoughts</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="col-auto ml-md-auto">
                                <a href="#" class="btn btn-secondary btn-width-lg">Create Post</a>
                            </div>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
</main>

@endsection
