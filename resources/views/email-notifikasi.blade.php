@component('mail::message')
    # {{ $data['title'] }}

    Halo! {{ $data['nama'] }},

    Terdapat Kegiatan {{ $data['kegiatan'] }} yang akan dilaksanakan pada tanggal {{ \Carbon\Carbon::parse($data['tanggaldari'])->formatLocalized('%d %B %Y') ?? 'Kosong' }} sampai {{ \Carbon\Carbon::parse($data['tanggalsampai'])->formatLocalized('%d %B %Y') ?? 'Kosong' }} di {{ $data['tempat'] }},

    Jangan Lupa Datang Ya....

    Terimakasih,
    Agenda Kegiatan Dinas Kesehatan
@endcomponent
