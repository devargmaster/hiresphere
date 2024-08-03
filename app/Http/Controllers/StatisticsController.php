<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class StatisticsController extends Controller
{
    /**
     * Muestra las estadísticas para un ID específico.
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function show($id)
    {
        // Lógica para obtener las estadísticas basadas en el ID
        $statistics = $this->getStatisticsById($id);

        // Retornar la vista con las estadísticas
        return view('statistics.show', compact('statistics','id'));
    }

    /**
     * Obtiene las estadísticas basadas en el ID.
     *
     * @param int $id
     * @return array
     */
    private function getStatisticsById($id)
    {
        switch ($id) {
            case 1:
                $freeUsers = User::where('subscription_type', 'free')->get(['name', 'email']);
                return [
                    'title' => 'Usuarios Gratuitos',
                    'details' => $freeUsers
                ];
            case 2:
                // Lógica para el ID 2
                return [
                    'title' => 'Total de Suscriptores',
                    'details' => [] // Reemplaza con la lógica adecuada
                ];
            // Agregar más casos según sea necesario
            default:
                return [
                    'title' => 'Información Genérica',
                    'details' => []
                ];
        }
    }
}
