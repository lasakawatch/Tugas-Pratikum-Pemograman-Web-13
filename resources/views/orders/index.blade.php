@extends('layouts.app')

@section('title', 'Pesanan Saya')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="text-telkom fw-bold">
                    <i class="bi bi-bag-check me-2"></i>Pesanan Saya
                </h2>
                <a href="/products" class="btn btn-telkom">
                    <i class="bi bi-arrow-left me-2"></i>Kembali ke Produk
                </a>
            </div>

            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-2"></i>{{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            @endif

            @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="bi bi-exclamation-circle me-2"></i>{{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            @endif

            @if($orders->count() > 0)
            <div class="card shadow-lg border-0 orders-card">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead class="bg-telkom text-white">
                                <tr>
                                    <th class="px-4 py-3">No</th>
                                    <th class="py-3">Produk</th>
                                    <th class="py-3">Toko</th>
                                    <th class="py-3 text-center">Jumlah</th>
                                    <th class="py-3 text-end">Harga Satuan</th>
                                    <th class="py-3 text-end">Total</th>
                                    <th class="py-3 text-center">Status</th>
                                    <th class="py-3 text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orders as $index => $order)
                                <tr class="order-row">
                                    <td class="px-4 py-3 fw-semibold">{{ $index + 1 }}</td>
                                    <td class="py-3">
                                        <div class="fw-semibold text-dark">{{ $order->product->name }}</div>
                                        <small class="text-muted">{{ Str::limit($order->product->description, 50) }}</small>
                                    </td>
                                    <td class="py-3">
                                        <i class="bi bi-shop text-telkom me-1"></i>{{ $order->product->store }}
                                    </td>
                                    <td class="py-3 text-center">
                                        <span class="badge bg-light text-dark border">{{ $order->quantity }} pcs</span>
                                    </td>
                                    <td class="py-3 text-end">Rp {{ number_format($order->product->price, 0, ',', '.') }}</td>
                                    <td class="py-3 text-end fw-bold text-telkom">Rp {{ number_format($order->total_price, 0, ',', '.') }}</td>
                                    <td class="py-3 text-center">
                                        @if($order->status == 'pending')
                                            <span class="badge bg-warning text-dark">
                                                <i class="bi bi-clock me-1"></i>Pending
                                            </span>
                                        @elseif($order->status == 'completed')
                                            <span class="badge bg-success">
                                                <i class="bi bi-check-circle me-1"></i>Selesai
                                            </span>
                                        @else
                                            <span class="badge bg-danger">
                                                <i class="bi bi-x-circle me-1"></i>Dibatalkan
                                            </span>
                                        @endif
                                    </td>
                                    <td class="py-3 text-center">
                                        @if($order->status == 'pending')
                                        <form action="/orders/{{ $order->id }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin membatalkan pesanan ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                        @else
                                        <span class="text-muted">-</span>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot class="bg-light">
                                <tr>
                                    <td colspan="5" class="px-4 py-3 text-end fw-bold">Total Pesanan:</td>
                                    <td class="py-3 text-end fw-bold text-telkom fs-5">
                                        Rp {{ number_format($orders->sum('total_price'), 0, ',', '.') }}
                                    </td>
                                    <td colspan="2"></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            @else
            <div class="text-center py-5">
                <div class="empty-state">
                    <i class="bi bi-bag-x display-1 text-muted mb-3"></i>
                    <h4 class="text-muted">Belum Ada Pesanan</h4>
                    <p class="text-muted mb-4">Mulai belanja produk favoritmu sekarang!</p>
                    <a href="/products" class="btn btn-telkom btn-lg">
                        <i class="bi bi-shop me-2"></i>Lihat Produk
                    </a>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>

<style>
.text-telkom {
    color: #800000;
}

.bg-telkom {
    background: linear-gradient(135deg, #800000, #b30000);
}

.btn-telkom {
    background: linear-gradient(135deg, #800000, #b30000);
    color: white;
    border: none;
    padding: 10px 24px;
    border-radius: 8px;
    font-weight: 500;
    transition: all 0.3s ease;
}

.btn-telkom:hover {
    background: linear-gradient(135deg, #600000, #900000);
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(128, 0, 0, 0.3);
}

.orders-card {
    border-radius: 15px;
    overflow: hidden;
    animation: fadeInUp 0.6s ease;
}

.order-row {
    transition: all 0.3s ease;
}

.order-row:hover {
    background-color: #fff5f5;
    transform: scale(1.01);
}

.empty-state {
    animation: fadeIn 0.8s ease;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

.table thead th {
    border: none;
    font-weight: 600;
    letter-spacing: 0.5px;
}

.table tbody tr {
    border-bottom: 1px solid #f0f0f0;
}

.table tbody tr:last-child {
    border-bottom: none;
}
</style>
@endsection
