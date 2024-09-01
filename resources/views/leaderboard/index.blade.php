<x-layout>

    <style>
        .badge{
            color: black;
            border: none;
        }

        .tbody{
            background-color: transparent;
        }


        th, td{
            background-color: #F2F5FC !important;
        }
    </style>

    <x-slot:title>
        Leaderboard
    </x-slot:title>

    <div class="container mb-4">
        <div class="row py-1">
            <div class="col">
                <h5>Anda peringkat:</h5>
                <h5 class="badge fs-2" style="background-color: #58DF55;">#3344</h5>
            </div>
        </div>
    </div>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Score</th>
                </tr>
            </thead>
            <tbody class="tbody">
                <tr>
                    <th scope="row">#1</th>
                    <td><span class="badge badge-primary">Nama</span></td>
                    <td>112233</td>
                </tr>
                <tr>
                    <th scope="row">#2</th>
                    <td><span class="badge badge-primary">Nama</span></td>
                    <td>XXXXX</td>
                </tr>
                <tr>
                    <th scope="row">#3</th>
                    <td><span class="badge badge-primary">Nama</span></td>
                    <td>XXXXX</td>
                </tr>
                <tr>
                    <th scope="row">#4</th>
                    <td><span class="badge badge-primary">Nama</span></td>
                    <td>XXXXX</td>
                </tr>
                <tr>
                    <th scope="row">#5</th>
                    <td><span class="badge badge-primary">Nama</span></td>
                    <td>XXXXX</td>
                </tr>
                <tr>
                    <th scope="row">#3344</th>
                    <td><span class="badge badge-primary">Anda</span></td>
                    <td>XXXXX</td>
                </tr>
            </tbody>
        </table>
    </div>
</x-layout>
