<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Ldcr_crianca;
use App\Ldcr_funcionario;
use App\Ldcr_cidade;
use App\Ldcr_estado;
use App\Ldcr_cargo;
use App\User;
use App\Ldcr_conselho_tutelar;
use App\Ldcr_conselheiros_tute;
use App\Ldcr_raca;
use App\ldcr_questoes_pia_iten;
use App\Ldcr_acolhimento;
use App\Ldcr_tipo_documento;
use App\Ldcr_doc_apsen;
use App\Ldcr_grau_parentesco;
use App\Ldcr_acmt_questoes_pia_iten;
use App\ldcr_cria_externa;
use App\ldcr_cria_saude;
use App\ldcr_responsaveis;
use App\ldcr_orientacao;

use Illuminate\Support\Facades\DB;

class ChildController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //List
    public function index()
    {
        //$employees = Client::all();
        //o nome index abaixo refere-se ao nome da view tirando a parte .blade.php
        //return view('index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //Register
    public function create()
    {
        
        $cities = Ldcr_cidade::all();
        $stats = Ldcr_estado::all();
        $conselheiros = Ldcr_conselheiros_tute::all();
        $conselhos = Ldcr_conselho_tutelar::all();
        $racas = Ldcr_raca::all();
        $qpis = ldcr_questoes_pia_iten::all();
        $cts = Ldcr_conselho_tutelar::all();
        $acolhimentos = Ldcr_acolhimento::all();
        $graus = Ldcr_grau_parentesco::all();

        $count1 = DB::table('ldcr_questoes_pia_iten')->where('FK_QESP_ID', 1)->count();
        $count2 = DB::table('ldcr_questoes_pia_iten')->where('FK_QESP_ID', 2)->count();
        $count3 = DB::table('ldcr_questoes_pia_iten')->where('FK_QESP_ID', 3)->count();
        $count4 = DB::table('ldcr_questoes_pia_iten')->where('FK_QESP_ID', 4)->count();
        $count5 = DB::table('ldcr_questoes_pia_iten')->where('FK_QESP_ID', 5)->count();
        $count6 = DB::table('ldcr_questoes_pia_iten')->where('FK_QESP_ID', 6)->count();
        $count7 = DB::table('ldcr_questoes_pia_iten')->where('FK_QESP_ID', 7)->count();
        $count8 = DB::table('ldcr_questoes_pia_iten')->where('FK_QESP_ID', 8)->count();
        $count9 = DB::table('ldcr_questoes_pia_iten')->where('FK_QESP_ID', 9)->count();
        $count10 = DB::table('ldcr_questoes_pia_iten')->where('FK_QESP_ID', 10)->count();
        $count11 = DB::table('ldcr_questoes_pia_iten')->where('FK_QESP_ID', 11)->count();
        $count12 = DB::table('ldcr_questoes_pia_iten')->where('FK_QESP_ID', 12)->count();
        $count13 = DB::table('ldcr_questoes_pia_iten')->where('FK_QESP_ID', 13)->count();
        $count14 = DB::table('ldcr_questoes_pia_iten')->where('FK_QESP_ID', 14)->count();
        $count15 = DB::table('ldcr_questoes_pia_iten')->where('FK_QESP_ID', 15)->count();
        $count16 = DB::table('ldcr_questoes_pia_iten')->where('FK_QESP_ID', 16)->count();
        $count17 = DB::table('ldcr_questoes_pia_iten')->where('FK_QESP_ID', 17)->count();

        $tipo_documentos = ldcr_tipo_documento::all();
        $count_doc = DB::table('ldcr_tipo_documento')->count();

        $apis_array = array($count1,$count2,$count3,$count4,$count5,$count6,$count7,$count8,$count9,$count10,$count11,$count12,$count13,$count14,$count15,$count16,$count17);

        return view('register_child', compact('cities','stats', 'conselheiros', 'conselhos', 'racas', 'qpis', 'acolhimentos', 'apis_array','tipo_documentos','count_doc', 'graus'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //Save
    public function store(Request $request)
    {
        $crianca = new Ldcr_crianca();
        $acolhimento = new Ldcr_acolhimento();
        $acmt_qpi = new Ldcr_acmt_questoes_pia_iten();
        $cria_extr = new ldcr_cria_externa();
        $saude = new ldcr_cria_saude();
        $responsavel = new ldcr_responsaveis();
        $orientacao = new ldcr_orientacao();

        $acolhimento->FK_CONS_ID = $request->get('FK_CONS_ID');
        $acolhimento->ACMT_VARA_INFAN = $request->get('ACMT_VARA_INFAN');
        $acolhimento->ACMT_DTA_ACOLHI = $request->get('ACMT_DTA_ACOLHI');
        $acolhimento->ACMT_VARA_RELAT = $request->get('ACMT_VARA_RELAT');
        $acolhimento->ACMT_VARA_OBS = $request->get('ACMT_VARA_OBS');
        $acolhimento->ACMT_PROX_RESIDENCIA = $request->get('ACMT_PROX_RESIDENCIA');
        $acolhimento->ACMT_ACOLH_ANT = $request->get('ACMT_ACOLH_ANT');
        $acolhimento->ACMT_MOT_ACOLHM_ANT = $request->get('ACMT_MOT_ACOLHM_ANT');
        $acolhimento->ACMT_HIG_VIOLENCIA = $request->get('ACMT_HIG_VIOLENCIA');
        $acolhimento->ACMT_REA_COMP = $request->get('ACMT_REA_COMP');
        $acolhimento->ACMT_VARA_NUM_PROCESS = $request->get('ACMT_VARA_NUM_PROCESS');
        $acolhimento->ACMT_DFPUB = $request->get('ACMT_DFPUB');
        $acolhimento->ACMT_DFPUB_FAM = $request->get('ACMT_DFPUB_FAM'); 
        $acolhimento->ACMT_ANO_ESCO = $request->get('ACMT_ANO_ESCO');
        $acolhimento->ACMT_FREQ_ESC = $request->get('ACMT_FREQ_ESC');
        $acolhimento->ACMT_REND_ESC = $request->get('ACMT_REND_ESC');
        $acolhimento->ACMT_VIV_REL_ESC = $request->get('ACMT_VIV_REL_ESC');
        $acolhimento->ACMT_HIST_FAMI = $request->get('ACMT_HIST_FAMI');
        $acolhimento->ACMT_HIST_FAMI_DES = $request->get('ACMT_HIST_FAMI_DES');
        $acolhimento->ACMT_OPIN_DECI = $request->get('ACMT_OPIN_DECI');
        $acolhimento->ACMT_OPIN_DEC_DES = $request->get('ACMT_OPIN_DEC_DES');
        $acolhimento->ACMT_DESEN_FISIC = $request->get('ACMT_DESEN_FISIC');
        $acolhimento->ACMT_DESEN_COGNI = $request->get('ACMT_DESEN_COGNI');
        $acolhimento->ACMT_DESEN_SOCIO_EMO = $request->get('ACMT_DESEN_SOCIO_EMO');
        $acolhimento->ACMT_VDA_COT = $request->get('ACMT_VDA_COT');
        $acolhimento->ACMT_OUT_INFO = $request->get('ACMT_OUT_INFO');
        $acolhimento->ACMT_MORA_CONDICAO = $request->get('ACMT_MORA_CONDICAO');
        $acolhimento->ACMT_INFOR_FAM_EXTENSA = $request->get('ACMT_INFOR_FAM_EXTENSA');
        $acolhimento->ACMT_OBS_GERAIS = $request->get('ACMT_OBS_GERAIS');
        
        $crianca->CRIA_NOME = $request->get('CRIA_NOME');
        $crianca->FK_CRIA_ESTD = $request->get('FK_CRIA_ESTD');
        $crianca->FK_CRIA_CIDADE = $request->get('FK_CRIA_CIDADE');
        $crianca->CRIA_DTA_NASC = $request->get('CRIA_DTA_NASC');
        $crianca->CRIA_IDADE_EST = $request->get('CRIA_IDADE_EST');
        $crianca->CRIA_CERT_NUM = $request->get('CRIA_CERT_NUM');
        $crianca->CRIA_CERT_LIVR = $request->get('CRIA_CERT_LIVR');
        $crianca->CRIA_CERT_FOLH = $request->get('CRIA_CERT_FOLH');
        $crianca->FK_RACA_ID = $request->get('FK_RACA_ID');
        $crianca->CRIA_SEXO = $request->get('CRIA_SEXO');  

        $cria_extr->CRIA_EXTR_NOME = $request->get('CRIA_EXTR_NOME');
        $cria_extr->CRIA_EXTR_NOME_INSTI = $request->get('CRIA_EXTR_NOME_INSTI');
        $cria_extr->CRIA_EXTR_END_INSTI = $request->get('CRIA_EXTR_END_INSTI');
        $cria_extr->CRIA_EXTR_DATA_NASC = $request->get('CRIA_EXTR_DATA_NASC');
        $cria_extr->CRIA_EXTR_FAM_CONT = $request->get('CRIA_EXTR_FAM_CONT');
        $cria_extr->CRIA_EXTR_MSM_INSTI = $request->get('CRIA_EXTR_MSM_INSTI');
        $cria_extr->CRIA_EXTR_OUTR_INST = $request->get('CRIA_EXTR_OUTR_INST');
        $cria_extr->CRIA_EXTR_FAM_TER = $request->get('CRIA_EXTR_FAM_TER');
        $cria_extr->CRIA_EXTR_ADOT = $request->get('CRIA_EXTR_ADOT');

        $saude->CSAU_CART_VAC = $request->get('CSAU_CART_VAC');
        $saude->CSAU_DIAG_MED = $request->get('CSAU_DIAG_MED');
        $saude->CSAU_DTA_DIAG_MED = $request->get('CSAU_DTA_DIAG_MED');
        $saude->CSAU_ACOP_MED = $request->get('CSAU_ACOP_MED');
        $saude->CSAU_USO_MED = $request->get('CSAU_USO_MED');
        $saude->CSAU_USO_MED_ESP = $request->get('CSAU_USO_MED_ESP');

        $responsavel->RESP_NOME_MAE = $request->get('RESP_NOME_MAE');
        $responsavel->RESP_NOME_PAI = $request->get('RESP_NOME_PAI');
        $responsavel->RESP_NOME = $request->get('RESP_NOME');
        $responsavel->FK_RESP_ESTD = $request->get('FK_RESP_ESTD');
        $responsavel->FK_RESP_CIDADE = $request->get('FK_RESP_CIDADE');
        $responsavel->RESP_END_CSA = $request->get('RESP_END_CSA');
        $responsavel->RESP_BAIRRO = $request->get('RESP_BAIRRO');
        $responsavel->RESP_DT_NASCI = $request->get('RESP_DT_NASCI');
        $responsavel->RESP_RG = $request->get('RESP_RG');
        $responsavel->RESP_CPF = $request->get('RESP_CPF');
        $responsavel->RESP_TEL = $request->get('RESP_TEL');
        $responsavel->RESP_PONT_REF = $request->get('RESP_PONT_REF');
        $responsavel->RESP_PROF = $request->get('RESP_PROF');
        $responsavel->RESP_END_TRAB = $request->get('RESP_END_TRAB');
        $responsavel->FK_GRPA_ID = $request->get('FK_GRPA_ID');

        $orientacao->ORNT_CONS_TUT = $request->get('ORNT_CONS_TUT');
        $orientacao->ORNT_CONS_TUT_OBS = $request->get('ORNT_CONS_TUT_OBS');
        $orientacao->ORNT_DPCA = $request->get('ORNT_DPCA');
        $orientacao->ORNT_DPCA_OBS = $request->get('ORNT_DPCA_OBS');
        $orientacao->ORNT_DELEGACIA_COMUM = $request->get('ORNT_DELEGACIA_COMUM');
        $orientacao->ORNT_DELEGACIA_COMUM_OBS = $request->get('ORNT_DELEGACIA_COMUM_OBS');
        $orientacao->ORNT_ASSISTENCIA_SOCIAL = $request->get('ORNT_ASSISTENCIA_SOCIAL');
        $orientacao->ORNT_ASSISTENCIA_SOCIAL_OBS = $request->get('ORNT_ASSISTENCIA_SOCIAL_OBS');
        $orientacao->ORNT_PROTECAO_SOCIAL_BASICA = $request->get('ORNT_PROTECAO_SOCIAL_BASICA');
        $orientacao->ORNT_PROTECAO_SOCIAL_ESPECIAL = $request->get('ORNT_PROTECAO_SOCIAL_ESPECIAL');
        $orientacao->ORNT_OUTROS_SERVICOS = $request->get('ORNT_OUTROS_SERVICOS');
        $orientacao->ORNT_OUTROS_SERVICOS_OBS = $request->get('ORNT_OUTROS_SERVICOS_OBS');
        $orientacao->ORNT_SAUDE = $request->get('ORNT_SAUDE');
        $orientacao->ORNT_SAUDE_OBS = $request->get('ORNT_SAUDE_OBS');
        $orientacao->ORNT_EDUCACAO = $request->get('ORNT_EDUCACAO');
        $orientacao->ORNT_EDUCACAO_OBS = $request->get('ORNT_EDUCACAO_OBS');
        $orientacao->ORNT_HABITACAO = $request->get('ORNT_HABITACAO');
        $orientacao->ORNT_HABITACAO_OBS = $request->get('ORNT_HABITACAO_OBS');
        $orientacao->ORNT_PROFISSIO_TRAB = $request->get('ORNT_PROFISSIO_TRAB');
        $orientacao->ORNT_PROFISSIO_TRAB_OBS = $request->get('ORNT_PROFISSIO_TRAB_OBS');

        $orientacao->ORNT_CONS_TUT_T2 = $request->get('ORNT_CONS_TUT_T2');
        $orientacao->ORNT_CONS_TUT_OBS_T2 = $request->get('ORNT_CONS_TUT_OBS_T2');
        $orientacao->ORNT_PROTECAO_SOCIAL_BASICA_T2 = $request->get('ORNT_PROTECAO_SOCIAL_BASICA_T2');
        $orientacao->ORNT_PROTECAO_SOCIAL_ESPECIAL_T2 = $request->get('ORNT_PROTECAO_SOCIAL_ESPECIAL_T2');
        $orientacao->ORNT_OUTROS_SERVICOS_T2 = $request->get('ORNT_OUTROS_SERVICOS_T2');
        $orientacao->ORNT_OUTROS_SERVICOS_OBS_T2 = $request->get('ORNT_OUTROS_SERVICOS_OBS_T2');
        $orientacao->ORNT_SAUDE_T2 = $request->get('ORNT_SAUDE_T2');
        $orientacao->ORNT_SAUDE_OBS_T2 = $request->get('ORNT_SAUDE_OBS_T2');
        $orientacao->ORNT_EDUCACAO_T2 = $request->get('ORNT_EDUCACAO_T2');
        $orientacao->ORNT_EDUCACAO_OBS_T2 = $request->get('ORNT_EDUCACAO_OBS_T2');
        $orientacao->ORNT_HABITACAO_T2 = $request->get('ORNT_HABITACAO_T2');
        $orientacao->ORNT_HABITACAO_OBS_T2 = $request->get('ORNT_HABITACAO_OBS_T2');
        $orientacao->ORNT_PROFISSIO_TRAB_T2 = $request->get('ORNT_PROFISSIO_TRAB_T2');
        $orientacao->ORNT_PROFISSIO_TRAB_OBS_T2 = $request->get('ORNT_PROFISSIO_TRAB_OBS_T2');

        $crianca->save();
        $lastID_crianca = $crianca->id;

        $acolhimento->FK_CRIA_ID = $lastID_crianca;
        $acolhimento->save();
        $lastID_acmt = $acolhimento->id;


        $cria_extr->FK_CRIA_ID = $lastID_crianca;
        $cria_extr->save();

        $saude->FK_ACMT_ID = $lastID_acmt;
        $saude->save();

        $responsavel->save();

        $orientacao->FK_CRIA_ID = $lastID_crianca;
        $orientacao->save();

        
        

        $acmt_qpi->FK_QEPI_ID = $request->get('FK_QEPI_ID');

        foreach($acmt_qpi->FK_QEPI_ID as $qepi_id){
                $qesp_id = DB::table('ldcr_questoes_pia_iten')->select('FK_QESP_ID')->where('QEPI_ID', '=', $qepi_id);
                DB::table('ldcr_acmt_questoes_pia_iten')->insert(['FK_QEPI_ID' => $qepi_id], ['FK_ACMT_ID' => $lastID_acmt], ['FK_QESP_ID' => $qespi_id]);

        }

        return redirect('register_child')->with(['success' => 'Criança editado com sucesso!']);    

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //Show one
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //View edit
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //Save update
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //Delete
    public function destroy($id)
    {
        //
    }
}
