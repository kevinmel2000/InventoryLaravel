<div class="col-md-6 col-xl-3" id="transaksi_keluar">
    <div class="card bg-c-yellow order-card text-white">
        <div class="card-block">
            <h6 class="m-b-20" style="min-height: 30px;"></h6>
            <h2 class="text-right"><span class="f-left"></span><i class="text-white"></i></h2>
            <a href="{{ route('barang_keluar.index') }}" class="text d-flex justify-content-center align-items-center text-white"><span>Info Lebih Lanjut</span><i class="ti-arrow-right" style="font-size: 10px;"></i></a>
        </div>
    </div>
</div>

@push('scripts')
@include('partials.functions')
<script>
    $(document).ready(function(){

        loadDashboard("transaksi_keluar");
        setInterval(function(){
            loadDashboard("transaksi_keluar");
        }, 300000);
    });
</script>
@endpush