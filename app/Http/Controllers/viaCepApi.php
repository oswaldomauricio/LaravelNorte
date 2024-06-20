<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ViaCepApi extends Controller
{
    public function apiCep(Request $request)
    {
        try {
            $cep = $request->input('cepInput');
            
            $info_client = Http::get("https://cep.awesomeapi.com.br/json/{$cep}")->json();
            
            if (isset($info_client['cep'])) {
                return response()->json([
                    'zipCode' => $info_client['cep'],
                    'address_type' => $info_client['address_type'],
                    'address_name' => $info_client['address_name'],
                    'address' => $info_client['address'],
                    'state' => $info_client['state'],
                    'district' => $info_client['district'],
                    'lat' => $info_client['lat'],
                    'lng' => $info_client['lng'],
                    'city' => $info_client['city']
                ]);
            } else {
                return response()->json(['error' => 'CEP not found'], 404);
            }
        } catch (\Exception $e) {
            Log::error('Error fetching CEP data: '.$e->getMessage());
            return response()->json(['error' => 'Internal Server Error'], 500);
        }
    }
}
