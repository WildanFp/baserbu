@extends('layouts.admin')

@section('main-content')
<div class="main-body">
        <h2><strong>Progress 1:</strong></h2>
        <p><div style="font-size: 25px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit non distinctio unde mollitia nam quasi
            recusandae illo sequi reiciendis error? Et cum expedita dignissimos libero, illo dolores soluta harum dicta. Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Doloremque voluptatem dicta, eaque maxime alias quaerat quisquam porro sint dolorem similique placeat,
            autem et iure incidunt assumenda, quo earum quis reprehenderit. Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Saepe unde alias quidem asperiores necessitatibus tempore. Perferendis asperiores necessitatibus doloribus expedita esse
            omnis labore quidem consequatur et! Aspernatur quaerat ab repudiandae!.Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Nulla, architecto officia, dolor perferendis deleniti eveniet quibusdam molestias temporibus consectetur aut autem magni dolore
            incidunt consequuntur sed laudantium recusandae vel nemo.</div></p>
        <form class="shadow p-3 mb-5 bg-white rounded">
        <h3>Komentar</h3>
        <div class="col">
            <div class="row" style="align-items: center;">
                <figure class="img-profile rounded-circle avatar font-weight-bold" data-initial="{{ Auth::user()->name[0] }}"></figure>
                <div class="col">
                    <div class="col">
                        <span class="fw-bolder" style="color: #AFAFAF; font-size: 20px"><strong>{{ Auth::user()->name }}</strong></span>
                    </div>
                </div>
            </div>
            <div class="col" style="margin-left: 45px">
            <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, sint sapiente sed fugiat vel, nesciunt optio,
                nisi perspiciatis quaerat nobis eveniet neque voluptate blanditiis! Voluptatem omnis atque vel incidunt. Iusto!</p>
            <span style="color: #AFAFAF;"><a href="" style="color: #AFAFAF">Balas</a> #time</span>
        </div>
        </div>

        </form>
</div>
@endsection
