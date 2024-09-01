<x-layout>
    <style>
        .btn{
            background-color: #58DF55;
            border: none;
        }
        .form-control{
            border-color: #58DF55;
        }
    </style>
    <div class="container py-5">
        <div class="card d-flex justify-content-center mb-4">
            <h3 class="container card-title d-flex justify-content-center py-3">Apa pesan moral yang dapat dipetik?</h3>
            <div class="container form-group">
                <textarea class="form-control mb-3" rows="5" placeholder="Masukkan jawabanmu di sini"></textarea>
            </div>
        </div>
        <div>   </div>
    </div>

    <div class="container d-flex justify-content-center">
        <a class="btn" href="{{ route('library.show-koreksi') }}" style="font-weight: bold">Kumpulkan</a>
    </div>
</x-layout>
