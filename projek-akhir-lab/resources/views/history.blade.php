@extends("templates.navbar")

@section('main')
    <main class="container d-flex flex-column align-items-center justify-content-center">
        <div class="mx-auto mt-3 text-center">
            @forelse ($histories as $history)
                <div class="mb-5">
                    <div class="d-flex bg-satu text-light justify-content-between rounded-top p-3 pb-1">
                        <h6 class="text-center w-100">
                            Purchase At {{ $history->created_at}}
                        </h6>
                    </div>
                    <div class="text-start bg-dua p-3 rounded-bottom">
                        <table>
                            <tr class="border-1 border-bottom">
                                <th class="py-1 px-2">Name</th>
                                <th class="border-1 border-start border-end py-1 px-2">Quantity</th>
                                <th class="border-1 border-start border-end py-1 px-2">Sub Price</th>
                                <th class="py-1 px-2">Price</th>
                            </tr>

                            @foreach ($histori_user_list as $hul)
                                @if ($hul->history_id == $history->id)
                                    <tr>
                                        <td class="px-2 w-100">{{$hul->name}}</td>
                                        <td class="border-1 border-start border-end py-1 px-2">{{$hul->quantity}}</td>
                                        <td class="border-1 border-start border-end py-1 px-2">Rp.{{$hul->price}}</td>
                                        <td class="px-2">Rp.{{$hul->total_price}}</td>
                                    </tr>
                                @endif
                            @endforeach

                            <tr class="border-1 border-top">
                                <th class="p-2" colspan="3">Total Price</th>
                                <th class="p-2">Rp.{{$history->total}}</th>
                            </tr>
                        </table>
                    </div>
                </div>
            @empty
                <h3>There is no item in history</h3>
                <ion-icon class="display-1 " name="receipt"></ion-icon>
            @endforelse
        </div>

        <div class="gap-4 position-fixed justify-content-end align-items-center d-flex bottom-0 bg-dua w-100 py-3"></div>

    </main>
@endsection
