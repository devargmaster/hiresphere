@extends('components.app')

@section('contenido')
   <table>
         <tr>
              <th>Nombre</th>
              <th>Correo</th>
              <th>Fecha de Nacimiento</th>
              <th>Acciones</th>
         </tr>
         @foreach($applicants as $applicant)
              <tr>
                <td>{{ $applicant->name }}</td>
                <td>{{ $applicant->email }}</td>
                <td>{{ $applicant->dob }}</td>
                <td>
{{--                     <a href="{{ route('applicant.edit', $applicant->id) }}">Editar</a>--}}
{{--                     <a href="{{ route('applicant.delete', $applicant->id) }}">Eliminar</a>--}}
                </td>
              </tr>
         @endforeach
   </table>
@endsection
