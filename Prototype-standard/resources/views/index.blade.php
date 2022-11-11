<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/8b497b2419.js" crossorigin="anonymous"></script>
    <title>Promotions and students management</title>
</head>

<body>

    <div class="container" style="height: 100%;">

        <header>
            <div>
                <div>
                    <h4>Promotions and Students Management</h4>
                </div>
                <div>
                    <button type="button">About</button>
                    <button type="button" id="submit">Settings</button>
                </div>
            </div>

            <div>

                <div>
                    <h3>Promotions:</h3>
                </div>
                <div>
                    <div class="">
                        <a href="{{ URL('briefs_index') }}"><button class="btn btn-primary btn-sm">Add
                                Brief</button></a>
                        <button class="btn btn-secondary btn-sm" id="add_promo">Add Promotion</button>
                        Search : <input id="search_brief" name="search" type="text" placeholder="Search..">
                    </div>
                </div>

            </div>
        </header>

        <div>
            <div>
                <form id="promo_form" action="{{ route('insert-promotion') }}" method="POST" style="display: none;">
                    @csrf
                    <div>
                        <div id="input_card">
                            <div>
                                <label>Promotion name:<input type="text" name="name"></label>
                                <br><button type="submit" name="add_promotion" class="button_sbmt"><span
                                        class="text">Submit</span><i class="ri-check-line icon"></i></button>
                                <i id="close_btn"></i>
                            </div>
                        </div>
                    </div>
                </form>



                <div class="row" id="search_table">
                    @foreach ($data as $row)
                        <div>
                            <div style="width: 18rem; height: 8rem;">
                                <div>
                                    Promotion Name: <h5 class="card-title">{{ $row->name }}</h5>
                                    <a href="{{ route('edit-promotion', ['id' => $row->id]) }}">Edit</a>
                                    <a href="{{ route('delete-promotion') }}?id={{ $row->id }}">Delete</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <script src="/index.js"></script>
</body>

</html>
