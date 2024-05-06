<x-layout>
    <x-slot:title>Candidatos</x-slot:title>
<div>
    <table>
        <thead>
        <tr>
            <th>Nombre del trabajo</th>
            <th>Solicitantes</th>
        </tr>
        </thead>
        <tbody>
        @foreach($jobs as $job)
            <tr>
                <td>{{ $job->title }}</td>
                <td>
                    <ul>
                        @foreach($job->applicants as $applicant)
                            <li>{{ $applicant->name }}</li>
                        @endforeach
                    </ul>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</x-layout>
