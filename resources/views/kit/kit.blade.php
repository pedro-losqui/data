<link rel="stylesheet" href="https://sistema.soc.com.br/estatico/webcontext/padrao/css/layout/0/0_sui.css?1637273152000" type="text/css">
<link rel="stylesheet" href="/WebSoc/padrao/css/jquery/ui.core.min.css.jsp?1637273152000" type="text/css">
<link rel="stylesheet" href="/WebSoc/padrao/css/jquery/ui.datepicker.min.css.jsp?1637273152000" type="text/css">
<link rel="stylesheet" href="/WebSoc/padrao/css/jquery/ui.theme.min.css.jsp?1637273152000" type="text/css">
<link rel="stylesheet" href="/WebSoc/padrao/css/bootstrap.min.css.jsp?1637273152000" type="text/css">

<style>
    body{
        background: #fff none;
        font-size:8pt;
    }
    .cb_e1
    {
        font-size: 8pt;
    }
    .cb_e2
    {
        font-size: 10pt;
        width: 80%;
    }
    .m0000, .m1000, .m0100, .m0010, .m0001, .m1100, .m1010, .m1001 , .m0110, .m0101, .m0011, .m1110, .m1101, .m1011, .m0111, .m1111 {
        font-size:8pt;
    }
    td{
        font-size:8pt;
        padding: 0;
        margin: 0;
    }


    #div_biometrias
    {
        position: fixed;
        width: 18%;
        float: left;
        margin-left: 10%;
        margin-right: 5%;
        text-align: left;
        border: 1px solid #cccccc;
        border-top: 0;
        top: 36px;
        padding: 1%;
        background-color: #fff;
        z-index: 999;
    }
    #div_biometrias p
    {
        margin: 5px 0;
    }
    #div_biometrias .label
    {
        font-size: 9pt;
    }
    #div_biometriasi
    {
        position: relative;
        display: block;
        width: 30%;
        float: left;
        margin: 5px 5% 0 10%;
        text-align: left;
        padding: 0 1%;
        font-size: 10pt;
        color: #545454;
        cursor: pointer;
    }
    #div_biometriasi img
    {
        width: 15px;margin-right: 10px;float: left;
    }
    #biometriaass{
        position: static;
        margin-top: 0;
    }

    @media print {
      .noprint { display: none; }
    }

    .tb-padrao{
        border-spacing: 0px;
        width:100%;
        border: 1px solid;
    }

    .nome-tabela {
        background-color: #eeeeee;
        border-bottom: 1px solid;
        width: 100%;
    }

    .width-20 {
        width: 20%;
    }
</style>

{{-- ASO --}}

@for ($i = 0; $i < 3 ; $i++)
<table class="tableHeader" width="100%" border="0" align="center"
    style="position: relative; border: 1px solid #000; margin-top: 15px;">
    <tbody>
        <tr>
            <td width="120px">
                <table cellspacing="0" cellpadding="0">
                    <tbody>
                        <tr>
                            <td><img src="https://sistema.soc.com.br/estatico/upload/empresas/143453/logos/relatorio/143453r1logorel.png"
                                    width="120" height="120"></td>
                        </tr>
                    </tbody>
                </table>
            </td>
            <td class="cb_e2" style="font-size:16px;" align="center">ASO - Atestado de Saúde Ocupacional<br>
                <font size="3"></font>
            </td>
            <td width="20%">&nbsp; </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td id="#tituloCabecalho" align="center" class="cb_e1" style="font-size:12px;">{{ $employee->nomEmpresa }}
            <td width="20%" align="right" class="cb_e1">{{ date('d/m/Y') }}</td>
        </tr>
    </tbody>
</table>

<table width="98%" border="0" cellspacing="0" cellpadding="0" align="center" style="margin-top: 15px;">
    <tbody>
        <tr>
            <td>
                <table id="tb-cabecalho" style="margin-top: 15px;" class="tb-padrao">
                    <tbody>
                        <tr>
                            <td class="nome-tabela" colspan="4"><b>&nbsp;Empresa</b></td>
                        </tr>

                        <tr>
                            <td width="20%">&nbsp;Razão Social:</td>
                            <td width="30%" colspan="3">{{ $employee->nomEmpresa }}
                            </td>
                        </tr>

                        <tr>
                            <td>&nbsp;CNPJ:</td>
                            <td colspan="3">{{ $employee->cnpjFilial }}</td>
                        </tr>

                        <tr>
                            <td>&nbsp;Unidade Alocado:</td>
                            <td colspan="3">{{ $employee->nomFilial }}</td>
                        </tr>

                        <tr>
                            <td>&nbsp;CNPJ Unidade Alocado:</td>
                            <td colspan="3">{{ $employee->cnpjPosto }}</td>
                        </tr>

                    </tbody>
                </table>
            </td>
        </tr>

        <tr>
            <td>
                <table id="tb-funcionario" style="margin-top: 15px;" class="tb-padrao">
                    <colgroup>
                        <col width="10%">
                        <col width="10%">
                        <col width="10%">
                        <col width="10%">
                        <col width="10%">
                        <col width="10%">
                        <col width="10%">
                        <col width="10%">
                        <col width="10%">
                        <col width="10%">
                    </colgroup>
                    <tbody>
                        <tr>
                            <td class="nome-tabela" colspan="12">
                                <strong>&nbsp;Funcionário</strong>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="2" class="width-20">
                                &nbsp;Nome:
                            </td>
                            <td colspan="7">
                                &nbsp;<b>{{ $employee->nomColaborador }}</b>

                            </td>
                        </tr>

                        <tr>
                            <td colspan="2">
                                &nbsp;RG
                                / CPF :
                            </td>
                            <td width="35%">
                                &nbsp;{{ $employee->cpfColaborador }}
                            </td>
                        </tr>

                        <tr>
                            <td colspan="2">&nbsp;Nascimento/Idade: </td>
                            <td width="35%">&nbsp;{{ $employee->nasColaborador }}</td>
                            <td width="15%">&nbsp;Sexo: </td>
                            <td width="35%">&nbsp;{{ $employee->presenter()->gender($employee->sexColaborador) }}</td>
                        </tr>

                        <tr>
                            <td colspan="2">&nbsp;Cargo: </td>
                            <td width="35%">&nbsp;{{ $employee->nomCargo }}</td>


                        </tr>
                        <tr>
                            <td colspan="2">&nbsp;Setor: </td>
                            <td colspan="7">&nbsp;{{ $employee->nomRateio }}</td>
                        </tr>

                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table border="0" width="100%" cellspacing="0" cellpadding="0" style="margin-top: 15px;">
                    <tbody>
                        <tr>
                            <td colspan="4" class="m1111" bgcolor="#eeeeee">&nbsp;<b>Médico Responsável pelo PCMSO</b>
                            </td>
                        </tr>

                        <tr>
                            <td width="20%" class="m0001">&nbsp;Nome:</td>
                            <td width="80%" class="m0100" colspan="3">&nbsp;CLAUDIO ERNANI MARCONDES DE MIRANDA</td>
                        </tr>
                        <tr>
                            <td class="m0001">&nbsp;CRM:</td>
                            <td class="m0100" colspan="3">&nbsp;37287&nbsp;</td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>

        <tr>
            <td>
                <table border="0" width="100%" cellspacing="0" cellpadding="0" style="margin-top: 15px;">
                    <tbody>
                        <tr>
                            <td width="100%" class="m1111" bgcolor="#eeeeee">&nbsp;<b>Perigos/Fatores de Risco</b></td>
                        </tr>
                        <tr>
                            <td width="100%" class="m0111" valign="top">
                                <table border="0" width="100%" cellspacing="0" cellpadding="0">

                                    <tbody>
                                        <tr>
                                            <td width="10%" valign="top" style="color: #009966;"><b>Físicos:</b></td>
                                            <td width="90%" valign="top" class="m0000">Radiações não ionizantes, Ruído.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="10%" valign="top" style="color: red;"><b>Químicos:</b></td>
                                            <td width="90%" valign="top" class="m0000">Fumos metálicos (cobre), Fumos
                                                metálicos (ferro), Hidrocarbonetos e outros compostos de carbono.</td>
                                        </tr>
                                        <tr>
                                            <td width="10%" valign="top" style="color: #0000FF;"><b>Acidentes :</b></td>
                                            <td width="90%" valign="top" class="m0000">Acidentes, Condições ou
                                                procedimentos que possam provocar contato com eletricidade, Trabalho em
                                                altura.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table border="0" width="100%" cellspacing="0" cellpadding="0" style="margin-top: 15px;">
                    <tbody>
                        <tr>
                            <td width="100%" class="m1111" bgcolor="#eeeeee">&nbsp;<b>EM CUMPRIMENTO ÀS PORTARIAS NºS
                                    3214/78, 3164/82, 12/83, 24/94 E 08/96 NR7 DO MINISTÉRIO DO TRABALHO E EMPREGO PARA
                                    FINS DE EXAME:</b></td>
                        </tr>
                        <tr>
                            <td width="100%" class="m0111">
                                &nbsp;{{ $employee->presenter()->kindExam($employee->retTipExa) }}

                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>

        <tr>
            <td>
                <table border="0" width="100%" cellspacing="0" cellpadding="0" style="margin-top: 15px;">
                    <tbody>
                        <tr>
                            <td width="100%" class="m1111" bgcolor="#eeeeee">&nbsp;<b>Avaliação Clínica e Exames
                                    Realizados</b></td>
                        </tr>
                        <tr>
                            <td width="100%" class="m0111">
                                <table border="0" width="100%" cellspacing="0" cellpadding="0">
                                    <tbody>
                                        <tr>

                                            <td width="*" valign="top" align="center">
                                                <table border="0" width="100%">


                                                    <tbody>
                                                        <tr>
                                                            <td style="white-space: nowrap" width="20%" valign="top"
                                                                class="m0000" align="left">____/____/______</td>
                                                            <td width="80%" valign="top" class="m0000" align="left">
                                                                Exame Clinico</td>
                                                        </tr>


                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>

        <tr>
            <td>
                <table border="0" width="100%" cellspacing="0" cellpadding="0" style="margin-top: 15px;">
                    <tbody>
                        <tr>
                            <td width="100%" class="m1111" bgcolor="#eeeeee">&nbsp;<b>Parecer</b></td>
                        </tr>
                        <tr>
                            <td width="100%" class="m0111">
                                &nbsp;[ &nbsp; ] Apto para função &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[ &nbsp; ] Inapto
                                para função
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>

        <tr>
            <td>
                <table border="0" width="100%" cellspacing="1" cellpadding="1" style="margin-top: 15px;"
                    class="conteudo-editor-texto">
                    <tbody>
                        <tr>
                            <td width="100%" class="m1111" bgcolor="#eeeeee">&nbsp;<b>Observações</b></td>
                        </tr>
                        <tr>
                            <td width="100%" class="m0111 conteudo-editor-texto" style="height: 50px;">
                                &nbsp;</td>
                        </tr>

                    </tbody>
                </table>
            </td>
        </tr>

        <tr>
            <td>
                <table width="100%" border="0" style="margin-top: 15px;">
                    <tbody>
                        <tr>
                            <td width="50%" height="12" align="center">

                            </td>
                            <td width="50%" height="12" align="center">
                                <div align="center">
                                    <br><br>
                                    _____/_____/__________
                                    <br><br><br>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td width="50%" height="18" valign="middle" align="center">
                                <br>
                                <p>____________________________________</p>
                                <p>
                                    Carimbo e Assinatura<br>Médico Examinador com CRM
                                </p>
                            </td>
                            <td width="50%" height="18" valign="middle" align="center">
                                <div class="assinaturaFuncionario">
                                </div>
                                <font color="#000000">____________________________________</font><br>

                                {{ $employee->nomColaborador }}
                                <br>
                            </td>
                        </tr>
                        <tr>
                            <td width="50%" height="18" valign="middle" align="center">&nbsp;
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>
<p class="pagina">&nbsp;</p>
@endfor

{{-- Pedido de exame --}}

<form name="cad011Form" method="post" action="/WebSoc/cad011.do">
    <div><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="459ffb14cab76bdf951c99c09edbda20"></div>
    <input type="hidden" name="ac" value="tela">
    <input type="hidden" name="crecid" value="aYkFbXMLRuwkZ__X01l8JLPgiF__YPjgZsag">
    <table class="tableHeader" width="100%" border="0" align="center"
        style="position: relative; border: 1px solid #000; margin-top: 15px;">
        <tbody>
            <tr>
                <td width="120px">
                    <table cellspacing="0" cellpadding="0">
                        <tbody>
                            <tr>
                                <td><img src="https://sistema.soc.com.br/estatico/upload/empresas/143453/logos/relatorio/143453r1logorel.png"
                                        width="120" height="120"></td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td class="cb_e2" style="font-size:16px;" align="center">Pedido de Exames<br>
                    <font size="3"></font>
                </td>
                <td width="20%">&nbsp; </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td id="#tituloCabecalho" align="center" class="cb_e1" style="font-size:12px;">{{ $employee->nomEmpresa }}</td>
                <td width="20%" align="right" class="cb_e1">19/11/2021</td>
            </tr>
        </tbody>
    </table>
    <table width="100%" bgcolor="#eeeeee" border="0" cellspacing="0" cellpadding="0" style="position: relative;">
        <tbody>
            <tr>
                <td class="m1111" colspan="3">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td width="10%" class="m0000">
                                    <font size="3"><b>Prestador</b></font>
                                </td>
                                <td width="40%" class="m0000" align="left">
                                    <font size="3"><b>{{ $employee->nomLaboratorio }}</b></font>&nbsp;
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
    <table width="100%" border="0" cellpadding="0" cellspacing="0" style="position: relative;">
        <tbody>
            <tr>
                <td class="m0101" colspan="6">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td class="m1111" width="20%" nowrap="">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>

                                <td class="m0000" style="font-weight: bold" nowrap="">&nbsp;Funcionário</td>
                            </tr>
                            <tr>
                                <td class="m0000" nowrap="">&nbsp;
                                    {{ $employee->nomColaborador }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td class="m1110" colspan="1" nowrap="">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                            </tr>
                            <tr>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td class="m1110" width="15%" nowrap="" colspan="1">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td class="m0000" style="font-weight: bold" nowrap="">CPF</td>
                            </tr>
                            <tr>
                                <td class="m0000" nowrap="">{{ $employee->cpfColaborador }}</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td class="m1110" width="15%" nowrap="">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td class="m0000" style="font-weight: bold" nowrap="">Tipo de Exame</td>
                            </tr>
                            <tr>
                                <td class="m0000" nowrap="">{{ $employee->presenter()->kindExam($employee->retTipExa) }}</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td class="m0111" width="50%">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td class="m0000" style="font-weight: bold">&nbsp;Empresa</td>
                            </tr>
                            <tr>
                                <td class="m0000">
                                    {{ $employee->nomEmpresa }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td class="m0110" width="25%">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td class="m0000" style="font-weight: bold">Unidade</td>
                            </tr>
                            <tr>
                                <td class="m0000">{{ $employee->nomFilial }}</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td class="m0110" width="25%" colspan="2">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td class="m0000" style="font-weight: bold">CNPJ</td>
                            </tr>
                            <tr>
                                <td class="m0000">00.886.257/0007-88</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td class="m0111" width="25%">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td class="m0000" style="font-weight: bold">Data de Nascimento</td>
                            </tr>
                            <tr>
                                <td class="m0000">{{ $employee->nasColaborador }}</td>
                            </tr>
                        </tbody>
                    </table>
                </td>

                <td class="m0110" width="25%">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td class="m0000" style="font-weight: bold">Data de admissão</td>
                            </tr>
                            <tr>
                                <td class="m0000">{{ $employee->dataAdm }}</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td class="m0110" width="10%">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td class="m0000" style="font-weight: bold">&nbsp;Idade</td>
                            </tr>
                            <tr>
                                <td class="m0000">&nbsp;{{ $employee->presenter()->age($employee->nasColaborador) }}</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td class="m0110" width="40%" colspan="1">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td class="m0000" style="font-weight: bold">Data Ficha</td>
                            </tr>
                            <tr>
                                <td class="m0000">&nbsp;{{ $employee->created_at->format('d/m/Y') }}</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td class="m0111" width="40%">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td class="m0000" width="100%" colspan="1">
                                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                        <tbody>
                                            <tr>
                                                <td class="m0000" style="font-weight: bold">Nome do Setor</td>
                                            </tr>
                                            <tr>
                                                <td class="m0000">Manutenção de equipamentos 01.03.10.02.02.01</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td class="m0110" width="60%" colspan="3">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td class="m0000" style="font-weight: bold">Nome do Cargo</td>
                            </tr>
                            <tr>
                                <td class="m0000">Eletromecanico I</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
    <br>
    <table width="100%" border="0" cellpadding="0" cellspacing="0" style="position: relative;">
        <tbody>
            <tr>
                <td class="m1110" colspan="4">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td class="m0001" bgcolor="#eeeeee" align="center">Exames</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td class="m0111" colspan="4">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">

                    </table>
                </td>
            </tr>
            <tr>
                <td class="m0111" colspan="4">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td width="20%" class="m0010" style="font-weight: bold">Código Exame</td>
                                <td width="20%" class="m0010" style="font-weight: bold">Nome do Exame</td>
                                <td width="*" class="m0010" style="font-weight: bold">Recomendação</td>
                                <td width="10%" class="m0010" style="font-weight: bold">Data</td>
                                <td width="10%" class="m0010" style="font-weight: bold">Hora</td>
                            </tr>
                            <tr>
                                <td class="m0000"><b>CLINICO</b><br></td>
                                <td class="m0000" valign="top">Exame Clinico</td>
                                <td class="m0000" valign="top">
                                </td>
                                <td class="m0000"></td>
                                <td class="m0000"></td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>

        </tbody>
    </table>
    <br>
    <br>
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td class="m1110" colspan="2">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td class="m0001" bgcolor="#eeeeee" align="center">Exames Realizados por Outras
                                    Prestadoras</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td class="m0111" colspan="2">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td width="30%" class="m0010" style="font-weight: bold">Exames </td>
                                <td width="70%" class="m0010" style="font-weight: bold">Prestador</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table><br><br>

    <br><br>

    <table width="100%" border="0" style="position: relative;">
        <tbody>
            <tr>
                <td width="51%" valign="middle" align="center" class="camrel">&nbsp;


                </td>
            </tr>
            <tr>
                <td width="51%" valign="middle" align="center" class="camrel">
                    <div class="divAssinaturaResponsavel"></div>
                    <br>
                    <p>____________________________________</p>
                    Carimbo e Assinatura
                    <br>
                    Médico Examinador com CRM
                </td>
                <td width="11%" valign="middle" align="center">&nbsp;</td>
                <td width="38%" valign="middle" align="center" class="camrel">
                    <div class="assinaturaFuncionario">
                    </div>
                    <font color="#000000">____________________________________</font><br>
                    Adenilson Nogueira Da Costa
                    <br>
                    RG: 18644777
                    <br>
                </td>
            </tr>
        </tbody>
    </table>
</form>

{{-- Ficha clínica --}}

<p class="pagina">&nbsp;</p>

<style type="text/css">

    .tabela{
      width: 100%;
      border: 0;
      border-spacing: 0;
    }
     .tabela td{
          padding: 0;
     }

</style>

<table class="tableHeader" width="100%" border="0" align="center"
    style="position: relative; border: 1px solid #000; margin-top: 15px;">
    <tbody>
        <tr>
            <td width="120px">
                <table cellspacing="0" cellpadding="0">
                    <tbody>
                        <tr>
                            <td><img src="https://sistema.soc.com.br/estatico/upload/empresas/143453/logos/relatorio/143453r1logorel.png"
                                    width="120" height="120"></td>
                        </tr>
                    </tbody>
                </table>
            </td>
            <td class="cb_e2" style="font-size:16px;" align="center">Ficha Clínica<br>
                <font size="3"></font>
            </td>
            <td width="20%">&nbsp; </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td id="#tituloCabecalho" align="center" class="cb_e1" style="font-size:12px;">Atmosfera Gestão Higienização
                de Têxteis | Planta SP - Jundiai</td>
            <td width="20%" align="right" class="cb_e1">19/11/2021</td>
        </tr>
    </tbody>
</table>
<table class="tabela">
    <tbody>
        <tr>
            <td class="s1111" colspan="3">
                <table class="tabela">
                    <tbody>
                        <tr>
                            <td class="s0000" style="font-weight:bold">&nbsp;Funcionário (Código / Nome)</td>
                        </tr>
                        <tr>
                            <td class="s0000">&nbsp;844 / <b>Adenilson Nogueira Da Costa</b>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
            <td class="s1110" width="25%">
                <table class="tabela">
                    <tbody>
                        <tr>
                            <td class="s0000" style="font-weight:bold">&nbsp;RG</td>
                        </tr>
                        <tr>
                            <td class="s0000">18644777</td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td class="s0111" colspan="3">
                <table class="tabela">
                    <tbody>
                        <tr>
                            <td class="s0000" style="font-weight:bold">&nbsp;Empresa</td>
                        </tr>
                        <tr>
                            <td class="s0000">

                                &nbsp;Atmosfera Gestão Higienização de Têxteis | Planta SP - Jundiai
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
            <td class="s0110" width="25%">
                <table class="tabela">

                    <tbody>
                        <tr>
                            <td class="s0000" style="font-weight:bold">&nbsp;CNPJ</td>
                        </tr>
                        <tr>
                            <td class="s0000">&nbsp;00.886.257/0007-88</td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td class="s0111" width="50%" colspan="2">
                <table class="tabela">
                    <tbody>
                        <tr>
                            <td class="s0000" style="font-weight:bold">&nbsp;Unidade</td>
                        </tr>
                        <tr>
                            <td class="s0000">&nbsp;Atmosfera Gestão Higienização de Têxteis | Planta SP - Jundiai</td>
                        </tr>
                    </tbody>
                </table>
            </td>
            <td class="s0110" colspan="2">
                <table class="tabela">
                    <tbody>
                        <tr>
                            <td class="s0000" style="font-weight:bold">&nbsp;Setor</td>
                        </tr>
                        <tr>
                            <td class="s0000">&nbsp;Manutenção de equipamentos 01.03.10.02.02.01</td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td class="s0111" colspan="2">
                <table class="tabela">
                    <tbody>
                        <tr>
                            <td class="s0000" style="font-weight:bold">&nbsp;Cargo</td>
                        </tr>
                        <tr>
                            <td class="s0000">&nbsp;Eletromecanico I</td>
                        </tr>
                    </tbody>
                </table>
            </td>

            <td class="s0110" width="25%">
                <table class="tabela">
                    <tbody>
                        <tr>
                            <td class="s0000" style="font-weight:bold">&nbsp;Sexo</td>
                        </tr>
                        <tr>
                            <td class="s0000">&nbsp;Masculino</td>
                        </tr>
                    </tbody>
                </table>
            </td>
            <td class="s0110" width="25%">
                <table class="tabela">
                    <tbody>
                        <tr>
                            <td class="s0000" style="font-weight:bold">&nbsp;Idade</td>
                        </tr>
                        <tr>
                            <td class="s0000">&nbsp;54</td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td class="s0111" width="25%" colspan="1">
                <table class="tabela">
                    <tbody>
                        <tr>
                            <td class="s0000" style="font-weight:bold">&nbsp;Nascimento</td>
                        </tr>
                        <tr>
                            <td class="s0000">&nbsp;12/10/1967</td>
                        </tr>
                    </tbody>
                </table>
            </td>

            <td class="s0110" width="25%">
                <table class="tabela">
                    <tbody>
                        <tr>
                            <td class="s0000" style="font-weight:bold">&nbsp;Admissão</td>
                        </tr>
                        <tr>
                            <td class="s0000">&nbsp;02/05/1995</td>
                        </tr>
                    </tbody>
                </table>
            </td>


            <td class="s0110" width="25%">
                <table class="tabela">
                    <tbody>
                        <tr>
                            <td class="s0000" style="font-weight:bold">&nbsp;Entrada </td>
                        </tr>
                        <tr>
                            <td class="s0000">&nbsp;00:00</td>
                        </tr>
                    </tbody>
                </table>
            </td>
            <td class="s0110" width="25%">
                <table class="tabela">
                    <tbody>
                        <tr>
                            <td class="s0000" style="font-weight:bold">&nbsp;Saída</td>
                        </tr>
                        <tr>
                            <td class="s0000">&nbsp;00:00</td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td class="s0111" colspan="3">
                <table class="tabela">
                    <tbody>
                        <tr>
                            <td class="s0000" style="font-weight:bold">&nbsp;Tipo de Exame</td>
                        </tr>
                        <tr>
                            <td class="s0000">&nbsp;Periódico</td>
                        </tr>
                    </tbody>
                </table>
            </td>
            <td class="s0110" width="25%">
                <table class="tabela">
                    <tbody>
                        <tr>
                            <td class="s0000" style="font-weight:bold">&nbsp;Data Ficha</td>
                        </tr>
                        <tr>
                            <td class="s0000">&nbsp;19/11/2021</td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td class="s0111" colspan="4">
                <table class="tabela">
                    <tbody>
                        <tr>
                            <td class="s0000" style="font-weight:bold">
                                &nbsp;Médico(a)/
                            </td>
                        </tr>
                        <tr>
                            <td class="s0000">
                                &nbsp;
                            </td>
                        </tr>

                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td class="s0111" colspan="4">
                <table class="tabela">
                    <tbody>
                        <tr>
                            <td class="s0000" style="font-weight:bold">&nbsp;Exames </td>
                        </tr>
                        <tr>
                            <td class="s0000">&nbsp;Exame Clinico, </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>

<table style="width: 100%; border: 0px; border-spacing: 0;" align="center">
    <tbody>
        <tr class="s1111">
            <td class="s1111">
                <table style="width: 100%; border: 0px;">
                    <tbody>
                        <tr>
                            <td class="titesc" colspan="2" align="center"><b>Ficha Clínica</b></td>
                        </tr>
                        <tr>
                            <td class="titclaro" colspan="2" align="center"><b>PREENCHIMENTO DO FUNCIONÁRIO</b></td>
                        </tr>
                        <tr>
                            <td class="s1111" style="vertical-align: top; width: 50%;">
                                <table style="width: 100%;">
                                    <tbody>
                                        <tr>
                                            <td width="100%" colspan="4" class="s0111">DOENÇAS NA FAMÍLIA </td>
                                        </tr>
                                        <tr>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Tuberculose </td>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Derrame </td>
                                        </tr>
                                        <tr>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Pressão Alta </td>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Alcoolismo </td>
                                        </tr>
                                        <tr>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Câncer </td>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Diabetes </td>
                                        </tr>
                                        <tr>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Infarto </td>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Doença Nervosa </td>
                                        </tr>
                                        <tr>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Doença da Tireóide </td>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Alergias </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                            <td class="s1111" style="vertical-align: top; width: 50%;">
                                <table style="width: 100%;">
                                    <tbody>
                                        <tr>
                                            <td width="100%" colspan="4" class="s0111">HISTÓRIA SOCIAL </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" class="s0000" colspan="4">Atividade física <img
                                                    src="https://sistema.soc.com.br/estatico/webcontext/imagens/setadireita2.gif"
                                                    border="0">
                                                <div style="clear: both; height: 5px; float: none; width: 100%;">&nbsp;
                                                </div>
                                                <table width="49%" border="0" color="FF3333" cellpadding="0"
                                                    cellspacing="0" style="float: left;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="s0000" width="5%"
                                                                style="border: solid 1px #000000; width: 29px;">&nbsp;
                                                            </td>
                                                            <td class="s0000">&nbsp;
                                                                nunca&nbsp;
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <table width="49%" border="0" color="FF3333" cellpadding="0"
                                                    cellspacing="0" style="float: left;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="s0000" width="5%"
                                                                style="border: solid 1px #000000; width: 29px;">&nbsp;
                                                            </td>
                                                            <td class="s0000">&nbsp;
                                                                fim de semana&nbsp;
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <table width="49%" border="0" color="FF3333" cellpadding="0"
                                                    cellspacing="0" style="float: left;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="s0000" width="5%"
                                                                style="border: solid 1px #000000; width: 29px;">&nbsp;
                                                            </td>
                                                            <td class="s0000">&nbsp;
                                                                eventual&nbsp;
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <table width="49%" border="0" color="FF3333" cellpadding="0"
                                                    cellspacing="0" style="float: left;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="s0000" width="5%"
                                                                style="border: solid 1px #000000; width: 29px;">&nbsp;
                                                            </td>
                                                            <td class="s0000">&nbsp;
                                                                3 a 4 x por semana&nbsp;
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <table width="49%" border="0" color="FF3333" cellpadding="0"
                                                    cellspacing="0" style="float: left;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="s0000" width="5%"
                                                                style="border: solid 1px #000000; width: 29px;">&nbsp;
                                                            </td>
                                                            <td class="s0000">&nbsp;
                                                                diariamente&nbsp;
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Marque se você fuma </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" class="s0000" colspan="4">Se não fuma,
                                                já fumou? <img
                                                    src="https://sistema.soc.com.br/estatico/webcontext/imagens/setadireita2.gif"
                                                    border="0">
                                                <div style="clear: both; height: 5px; float: none; width: 100%;">&nbsp;
                                                </div>
                                                <table width="49%" border="0" color="FF3333" cellpadding="0"
                                                    cellspacing="0" style="float: left;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="s0000" width="5%"
                                                                style="border: solid 1px #000000; width: 29px;">&nbsp;
                                                            </td>
                                                            <td class="s0000">&nbsp;
                                                                sim&nbsp;
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <table width="49%" border="0" color="FF3333" cellpadding="0"
                                                    cellspacing="0" style="float: left;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="s0000" width="5%"
                                                                style="border: solid 1px #000000; width: 29px;">&nbsp;
                                                            </td>
                                                            <td class="s0000">&nbsp;
                                                                não&nbsp;
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" class="s0000" colspan="4">Você foi ao dentista nos últimos
                                                6 meses? <img
                                                    src="https://sistema.soc.com.br/estatico/webcontext/imagens/setadireita2.gif"
                                                    border="0">
                                                <div style="clear: both; height: 5px; float: none; width: 100%;">&nbsp;
                                                </div>
                                                <table width="49%" border="0" color="FF3333" cellpadding="0"
                                                    cellspacing="0" style="float: left;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="s0000" width="5%"
                                                                style="border: solid 1px #000000; width: 29px;">&nbsp;
                                                            </td>
                                                            <td class="s0000">&nbsp;
                                                                sim&nbsp;
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <table width="49%" border="0" color="FF3333" cellpadding="0"
                                                    cellspacing="0" style="float: left;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="s0000" width="5%"
                                                                style="border: solid 1px #000000; width: 29px;">&nbsp;
                                                            </td>
                                                            <td class="s0000">&nbsp;
                                                                não&nbsp;
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" class="s0000" colspan="4">Quanto tempo você leva ou levará
                                                de casa ao trabalho? <img
                                                    src="https://sistema.soc.com.br/estatico/webcontext/imagens/setadireita2.gif"
                                                    border="0">
                                                <div style="clear: both; height: 5px; float: none; width: 100%;">&nbsp;
                                                </div>
                                                <table width="49%" border="0" color="FF3333" cellpadding="0"
                                                    cellspacing="0" style="float: left;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="s0000" width="5%"
                                                                style="border: solid 1px #000000; width: 29px;">&nbsp;
                                                            </td>
                                                            <td class="s0000">&nbsp;
                                                                até 1/2 hora&nbsp;
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <table width="49%" border="0" color="FF3333" cellpadding="0"
                                                    cellspacing="0" style="float: left;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="s0000" width="5%"
                                                                style="border: solid 1px #000000; width: 29px;">&nbsp;
                                                            </td>
                                                            <td class="s0000">&nbsp;
                                                                de 1/2 a 1 hora&nbsp;
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <table width="49%" border="0" color="FF3333" cellpadding="0"
                                                    cellspacing="0" style="float: left;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="s0000" width="5%"
                                                                style="border: solid 1px #000000; width: 29px;">&nbsp;
                                                            </td>
                                                            <td class="s0000">&nbsp;
                                                                entre 1 e 2 horas&nbsp;
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <table width="49%" border="0" color="FF3333" cellpadding="0"
                                                    cellspacing="0" style="float: left;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="s0000" width="5%"
                                                                style="border: solid 1px #000000; width: 29px;">&nbsp;
                                                            </td>
                                                            <td class="s0000">&nbsp;
                                                                mais de 2 horas&nbsp;
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td class="s1111" style="vertical-align: top; width: 50%;">
                                <table style="width: 100%;">
                                    <tbody>
                                        <tr>
                                            <td width="100%" colspan="4" class="s0111">MEIOS DE TRANSPORTE QUE UTILIZA
                                                OU UTILIZARÁ PARA IR DE CASA AO TRABALHO </td>
                                        </tr>
                                        <tr>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Ônibus </td>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Metrô </td>
                                        </tr>
                                        <tr>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Trem </td>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Carro </td>
                                        </tr>
                                        <tr>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Van ou similares </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" class="s0000" colspan="4">Outros <img
                                                    src="https://sistema.soc.com.br/estatico/webcontext/imagens/setadireita2.gif"
                                                    border="0"><br>___________________________________________________<br>___________________________________________________<br>___________________________________________________<br>___________________________________________________<br>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                            <td class="s1111" style="vertical-align: top; width: 50%;">
                                <table style="width: 100%;">
                                    <tbody>
                                        <tr>
                                            <td width="100%" colspan="4" class="s0111">HÁBITOS DE LAZER </td>
                                        </tr>
                                        <tr>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Leitura </td>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Pintura </td>
                                        </tr>
                                        <tr>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Ouvir música sem head-fone </td>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Instrumentos musicais </td>
                                        </tr>
                                        <tr>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Canto </td>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">TV </td>
                                        </tr>
                                        <tr>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Basquete/Volei </td>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Ouvir música com head-fone </td>
                                        </tr>
                                        <tr>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Futebol </td>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Musculação </td>
                                        </tr>
                                        <tr>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Videogame </td>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Bordado/Tricô/Crochê </td>
                                        </tr>
                                        <tr>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Tênis </td>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Navegar na Internet </td>
                                        </tr>
                                        <tr>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Lutas </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td class="s1111" style="vertical-align: top; width: 50%;">
                                <table style="width: 100%;">
                                    <tbody>
                                        <tr>
                                            <td width="100%" colspan="4" class="s0111">HISTÓRIA OCUPACIONAL </td>
                                        </tr>
                                        <tr>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Além do trabalho nesta empresa,
                                                você faz outros? </td>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Se positivo,
                                                é igual ao que você faz nesta empresa? </td>
                                        </tr>
                                        <tr>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Você já trabalhou nesta função ou
                                                semelhante em outra empresa </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" class="s0000" colspan="4">Por quanto tempo? <img
                                                    src="https://sistema.soc.com.br/estatico/webcontext/imagens/setadireita2.gif"
                                                    border="0">
                                                <div style="clear: both; height: 5px; float: none; width: 100%;">&nbsp;
                                                </div>
                                                <table width="49%" border="0" color="FF3333" cellpadding="0"
                                                    cellspacing="0" style="float: left;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="s0000" width="5%"
                                                                style="border: solid 1px #000000; width: 29px;">&nbsp;
                                                            </td>
                                                            <td class="s0000">&nbsp;
                                                                Menos de 1 ano&nbsp;
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <table width="49%" border="0" color="FF3333" cellpadding="0"
                                                    cellspacing="0" style="float: left;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="s0000" width="5%"
                                                                style="border: solid 1px #000000; width: 29px;">&nbsp;
                                                            </td>
                                                            <td class="s0000">&nbsp;
                                                                De 1 a 2 anos&nbsp;
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <table width="49%" border="0" color="FF3333" cellpadding="0"
                                                    cellspacing="0" style="float: left;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="s0000" width="5%"
                                                                style="border: solid 1px #000000; width: 29px;">&nbsp;
                                                            </td>
                                                            <td class="s0000">&nbsp;
                                                                Mais de 2 anos&nbsp;
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Já teve acidente de trabalho?
                                            </td>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Se positivo,
                                                ficou com lesão? </td>
                                        </tr>
                                        <tr>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Você já esteve afastado pelo
                                                INSS? </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" class="s0000" colspan="4">Motivo <img
                                                    src="https://sistema.soc.com.br/estatico/webcontext/imagens/setadireita2.gif"
                                                    border="0"><br>___________________________________________________<br>___________________________________________________<br>___________________________________________________<br>___________________________________________________<br>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                            <td class="s1111" style="vertical-align: top; width: 50%;">
                                <table style="width: 100%;">
                                    <tbody>
                                        <tr>
                                            <td width="100%" colspan="4" class="s0111">ANTECEDENTES PESSOAIS </td>
                                        </tr>
                                        <tr>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Você usa óculos/lentes? </td>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Você tem pressão alta? </td>
                                        </tr>
                                        <tr>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Você usa remédio para pressão?
                                            </td>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Você usa remédios por outros
                                                motivos? </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" class="s0000" colspan="4">Quais? <img
                                                    src="https://sistema.soc.com.br/estatico/webcontext/imagens/setadireita2.gif"
                                                    border="0"><br>___________________________________________________<br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Você já teve Hepatite? </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" class="s0000" colspan="4">Se positivo,
                                                qual tipo de Hepatite? <img
                                                    src="https://sistema.soc.com.br/estatico/webcontext/imagens/setadireita2.gif"
                                                    border="0"><br>___________________________________________________<br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Você já foi operado? </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" class="s0000" colspan="4">De que? <img
                                                    src="https://sistema.soc.com.br/estatico/webcontext/imagens/setadireita2.gif"
                                                    border="0"><br>___________________________________________________<br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" class="s0000" colspan="4">Em que ano? <img
                                                    src="https://sistema.soc.com.br/estatico/webcontext/imagens/setadireita2.gif"
                                                    border="0"><br>___________________________________________________<br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Já quebrou algum osso? </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" class="s0000" colspan="4">Em que parte do corpo? <img
                                                    src="https://sistema.soc.com.br/estatico/webcontext/imagens/setadireita2.gif"
                                                    border="0"><br>___________________________________________________<br>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td class="s1111" style="vertical-align: top; width: 50%;">
                                <table style="width: 100%;">
                                    <tbody>
                                        <tr>
                                            <td width="100%" colspan="4" class="s0111">Você sente dores em algum destes
                                                locais? </td>
                                        </tr>
                                        <tr>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Dedos (Lado direito) </td>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Mãos (Lado direito) </td>
                                        </tr>
                                        <tr>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Punho (Lado direito) </td>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Cotovelo (Lado direito) </td>
                                        </tr>
                                        <tr>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Antebraço/Braço (Lado direito)
                                            </td>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Ombro (Lado direito) </td>
                                        </tr>
                                        <tr>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Joelho (Lado direito) </td>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Dedos (Lado esquerdo) </td>
                                        </tr>
                                        <tr>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Mãos (Lado esquerdo) </td>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Punho (Lado esquerdo) </td>
                                        </tr>
                                        <tr>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Cotovelo (Lado esquerdo) </td>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Antebraço/Braço (Lado esquerdo)
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Ombro (Lado esquerdo) </td>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Joelho (Lado esquerdo) </td>
                                        </tr>
                                        <tr>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Pescoço </td>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Costas </td>
                                        </tr>
                                        <tr>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Lombar </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                            <td class="s1111" style="vertical-align: top; width: 50%;">
                                <table style="width: 100%;">
                                    <tbody>
                                        <tr>
                                            <td width="100%" colspan="4" class="s0111">SOMENTE PARA HOMENS: </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" class="s0000" colspan="4">Próstata examinada no último ano?
                                                <img src="https://sistema.soc.com.br/estatico/webcontext/imagens/setadireita2.gif"
                                                    border="0">
                                                <div style="clear: both; height: 5px; float: none; width: 100%;">&nbsp;
                                                </div>
                                                <table width="49%" border="0" color="FF3333" cellpadding="0"
                                                    cellspacing="0" style="float: left;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="s0000" width="5%"
                                                                style="border: solid 1px #000000; width: 29px;">&nbsp;
                                                            </td>
                                                            <td class="s0000">&nbsp;
                                                                Sim&nbsp;
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <table width="49%" border="0" color="FF3333" cellpadding="0"
                                                    cellspacing="0" style="float: left;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="s0000" width="5%"
                                                                style="border: solid 1px #000000; width: 29px;">&nbsp;
                                                            </td>
                                                            <td class="s0000">&nbsp;
                                                                Não&nbsp;
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td class="s1111" style="vertical-align: top; width: 50%;">
                                <table style="width: 100%;">
                                    <tbody>
                                        <tr>
                                            <td width="100%" colspan="4" class="s0111">As declarações acima são
                                                verdadeiras </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" class="s0000" colspan="4">Assinatura do(a) Candidato(a) /
                                                Empregado(a) <img
                                                    src="https://sistema.soc.com.br/estatico/webcontext/imagens/setadireita2.gif"
                                                    border="0"><br>___________________________________________________<br>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                            <td width="50%" class="s0000"></td>
                        </tr>
                        <tr>
                            <td class="titclaro" colspan="2" align="center"><b>PREENCHIMENTO DO MÉDICO EXECUTOR</b></td>
                        </tr>
                        <tr>
                            <td class="s1111" style="vertical-align: top; width: 50%;">
                                <table style="width: 100%;">
                                    <tbody>
                                        <tr>
                                            <td width="100%" colspan="4" class="s0111">Exame Físico (Marque somente se a
                                                resposta for "Sim"ou "Alterado") </td>
                                        </tr>
                                        <tr>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Marcha </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" class="s0000" colspan="4">Observações <img
                                                    src="https://sistema.soc.com.br/estatico/webcontext/imagens/setadireita2.gif"
                                                    border="0"><br>___________________________________________________<br>___________________________________________________<br>___________________________________________________<br>___________________________________________________<br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Mucosas </td>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Dermatose </td>
                                        </tr>
                                        <tr>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Gânglios </td>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Tireóide </td>
                                        </tr>
                                        <tr>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Problemas/Tratamento Dentário
                                            </td>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Orofaringe </td>
                                        </tr>
                                        <tr>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Acuidade Visual </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" class="s0000" colspan="4">Uso de lentes corretivas <img
                                                    src="https://sistema.soc.com.br/estatico/webcontext/imagens/setadireita2.gif"
                                                    border="0">
                                                <div style="clear: both; height: 5px; float: none; width: 100%;">&nbsp;
                                                </div>
                                                <table width="49%" border="0" color="FF3333" cellpadding="0"
                                                    cellspacing="0" style="float: left;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="s0000" width="5%"
                                                                style="border: solid 1px #000000; width: 29px;">&nbsp;
                                                            </td>
                                                            <td class="s0000">&nbsp;
                                                                Sim&nbsp;
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <table width="49%" border="0" color="FF3333" cellpadding="0"
                                                    cellspacing="0" style="float: left;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="s0000" width="5%"
                                                                style="border: solid 1px #000000; width: 29px;">&nbsp;
                                                            </td>
                                                            <td class="s0000">&nbsp;
                                                                Não&nbsp;
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Rítmo cardíaco,
                                                regular em 2 T? </td>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">BNF </td>
                                        </tr>
                                        <tr>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Sopros </td>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Pulmões </td>
                                        </tr>
                                        <tr>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Abdomen </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" class="s0000" colspan="4">Observações <img
                                                    src="https://sistema.soc.com.br/estatico/webcontext/imagens/setadireita2.gif"
                                                    border="0"><br>___________________________________________________<br>___________________________________________________<br>___________________________________________________<br>___________________________________________________<br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Cotovelo Direito </td>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Cotovelo Esquerdo </td>
                                        </tr>
                                        <tr>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Ombro Direito </td>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Ombro Esquerdo </td>
                                        </tr>
                                        <tr>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Joelho Direito </td>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Joelho Esquerdo </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                            <td class="s1111" style="vertical-align: top; width: 50%;">
                                <table style="width: 100%;">
                                    <tbody>
                                        <tr>
                                            <td width="100%" colspan="4" class="s0111">Membros superiores - Mãos e
                                                Punhos: </td>
                                        </tr>
                                        <tr>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Normais </td>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Cistos sinoviais </td>
                                        </tr>
                                        <tr>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Cicatrizes </td>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Perda da força de preensão </td>
                                        </tr>
                                        <tr>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Crepitação </td>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Fraturas </td>
                                        </tr>
                                        <tr>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Dor </td>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Tinel </td>
                                        </tr>
                                        <tr>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Phalen </td>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Filkenstein </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td class="s1111" style="vertical-align: top; width: 50%;">
                                <table style="width: 100%;">
                                    <tbody>
                                        <tr>
                                            <td width="100%" colspan="4" class="s0111">Coluna </td>
                                        </tr>
                                        <tr>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Normal </td>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Escoliose </td>
                                        </tr>
                                        <tr>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Cifose </td>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Lordose </td>
                                        </tr>
                                        <tr>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Contratura supra-escapular à
                                                direita </td>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Contratura supra-escapular à
                                                esquerda </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" class="s0000" colspan="4">Outros <img
                                                    src="https://sistema.soc.com.br/estatico/webcontext/imagens/setadireita2.gif"
                                                    border="0"><br>___________________________________________________<br>___________________________________________________<br>___________________________________________________<br>___________________________________________________<br>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                            <td class="s1111" style="vertical-align: top; width: 50%;">
                                <table style="width: 100%;">
                                    <tbody>
                                        <tr>
                                            <td width="100%" colspan="4" class="s0111">Aparelho Muscular </td>
                                        </tr>
                                        <tr>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Normal </td>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Hipotrofias </td>
                                        </tr>
                                        <tr>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Atrofias </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" class="s0000" colspan="4">Observações <img
                                                    src="https://sistema.soc.com.br/estatico/webcontext/imagens/setadireita2.gif"
                                                    border="0"><br>___________________________________________________<br>___________________________________________________<br>___________________________________________________<br>___________________________________________________<br>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td class="s1111" style="vertical-align: top; width: 50%;">
                                <table style="width: 100%;">
                                    <tbody>
                                        <tr>
                                            <td width="100%" colspan="4" class="s0111">Membros Inferiores </td>
                                        </tr>
                                        <tr>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Normais </td>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Varizes </td>
                                        </tr>
                                        <tr>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Edemas </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" class="s0000" colspan="4">Outros <img
                                                    src="https://sistema.soc.com.br/estatico/webcontext/imagens/setadireita2.gif"
                                                    border="0"><br>___________________________________________________<br>___________________________________________________<br>___________________________________________________<br>___________________________________________________<br>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                            <td class="s1111" style="vertical-align: top; width: 50%;">
                                <table style="width: 100%;">
                                    <tbody>
                                        <tr>
                                            <td width="100%" colspan="4" class="s0111">Pessoa Portadora de Deficiência
                                                (Dec. 5.296/04) </td>
                                        </tr>
                                        <tr>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Deficiente: </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" class="s0000" colspan="4">Tipo de Deficiência <img
                                                    src="https://sistema.soc.com.br/estatico/webcontext/imagens/setadireita2.gif"
                                                    border="0"><br>___________________________________________________<br>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td class="s1111" style="vertical-align: top; width: 50%;">
                                <table style="width: 100%;">
                                    <tbody>
                                        <tr>
                                            <td width="100%" colspan="4" class="s0111">Solicitações: </td>
                                        </tr>
                                        <tr>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Solicitado exame complementar?
                                            </td>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Solicitado parecer do
                                                especialista? </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" class="s0000" colspan="4">Especialidade: <img
                                                    src="https://sistema.soc.com.br/estatico/webcontext/imagens/setadireita2.gif"
                                                    border="0"><br>___________________________________________________<br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="10%" valign="top">
                                                <table width="50%" style=" width: 29px;" border="0" color="FF3333"
                                                    cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%" class="s0110"
                                                                style="border: solid 1px; width: 29px;"><span
                                                                    style="color: white;">___</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td width="40%" valign="top" class="s0000">Encaminhamento ao perito? </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" class="s0000" colspan="4">Especialidade do perito: <img
                                                    src="https://sistema.soc.com.br/estatico/webcontext/imagens/setadireita2.gif"
                                                    border="0"><br>___________________________________________________<br>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                            <td class="s1111" style="vertical-align: top; width: 50%;">
                                <table style="width: 100%;">
                                    <tbody>
                                        <tr>
                                            <td width="100%" colspan="4" class="s0111">Conclusões </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" class="s0000" colspan="4">Parecer <img
                                                    src="https://sistema.soc.com.br/estatico/webcontext/imagens/setadireita2.gif"
                                                    border="0">
                                                <div style="clear: both; height: 5px; float: none; width: 100%;">&nbsp;
                                                </div>
                                                <table width="49%" border="0" color="FF3333" cellpadding="0"
                                                    cellspacing="0" style="float: left;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="s0000" width="5%"
                                                                style="border: solid 1px #000000; width: 29px;">&nbsp;
                                                            </td>
                                                            <td class="s0000">&nbsp;
                                                                Apto&nbsp;
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <table width="49%" border="0" color="FF3333" cellpadding="0"
                                                    cellspacing="0" style="float: left;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="s0000" width="5%"
                                                                style="border: solid 1px #000000; width: 29px;">&nbsp;
                                                            </td>
                                                            <td class="s0000">&nbsp;
                                                                Inapto&nbsp;
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" class="s0000" colspan="4">Observações <img
                                                    src="https://sistema.soc.com.br/estatico/webcontext/imagens/setadireita2.gif"
                                                    border="0"><br>___________________________________________________<br>___________________________________________________<br>___________________________________________________<br>___________________________________________________<br>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td class="s1111" style="vertical-align: top; width: 50%;">
                                <table style="width: 100%;">
                                    <tbody>
                                        <tr>
                                            <td width="100%" colspan="4" class="s0111">Assinaturas </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" class="s0000" colspan="4">Carimbo e Assinatura do Médico
                                                Examinador <img
                                                    src="https://sistema.soc.com.br/estatico/webcontext/imagens/setadireita2.gif"
                                                    border="0"><br>___________________________________________________<br>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                            <td width="50%" class="s0000"></td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>
