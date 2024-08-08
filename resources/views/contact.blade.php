<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <h4>Saya dapat dihubungi melalui kontak dibawah iniii</h4>
    <table class="mt-6 table-auto">
        <tr>
            <td>Email</td>
            <td>: {{ $email }}</td>
        </tr>
        <tr>
            <td>Instagram</td>
            <td>: {{ $instagram }}</td>
        </tr>
    </table>
</x-layout>