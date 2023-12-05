@extends('layouts.main')

@section('title')
<title>Cart | {{ config('app.name') }}</title>
@endsection

@section('container') <br><br><br><br><br>
<div class="container">
    <h1>{{ explode(' ', auth()->user()->name)[0] }}'s Cart</h1>
    <div class="mt-3">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    </div>
<table class="table table-bordered" id="cart">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Product</th>
        <th scope="col">Price</th>
        <th scope="col">Total</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @if (session('cart'))
            @foreach (session('cart') as $id => $details)
                
                <tr rowId="{{ $id }}">
                    <td>{{ $loop->iteration }}</td>
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-3 hidden-xs"><img src="{{ asset('fotosalad') }}/{{ $details['image'] }}" alt="{{ $details['name'] }}" class="card-img-top"></div>
                            <div class="col-sm-9">
                                <h4 class="nomargin text-capitalize">{{ $details['name'] }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">$ {{ $details['price'] }}</td>

                    <td data-th="Subtotal" class="text-center">{{ $details['quantity'] }}</td>
                    <td class="actions">
                        <a href="" class="btn btn-outline-danger btn-sm delete-product"><i class='bx bx-trash'></i></a>
                    </td>
                </tr>

            @endforeach
        @endif
    </tbody>
    <tfoot>
        <tr>
            <td colspan="5" class="text-right">
                <a href="{{ url('/home') }}" class="btn btn-primary">Continue Shopping</a>
                <button class="btn btn-danger">Checkout</button>
            </td>
        </tr>
    </tfoot>
  </table>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function () {
        updateCartSubtotal();

        $(".delete-product").click(function (e) {
            e.preventDefault();
            var ele = $(this);

            if (confirm("Do you really want to delete?")) {
                $.ajax({
                    url: '{{ route('delete.cart.product') }}',
                    method: "DELETE",
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: ele.parents("tr").attr("rowId")
                    },
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });

        function updateCartSubtotal() {
            var totalProducts = 0;

            // Menghitung total jumlah produk
            $("#cart tbody tr").each(function () {
                var quantity = parseInt($(this).find("td[data-th='Subtotal']").text());
                if (!isNaN(quantity)) {
                    totalProducts += quantity;
                }
            });

            // Memperbarui tampilan subtotal di bagian tfoot
            $("#cart tfoot td.text-right span").text(totalProducts);
        }
    });
</script>

    </script>
@endsection