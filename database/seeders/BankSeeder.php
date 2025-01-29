<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BankSeeder extends Seeder
{
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('banks')->insert([
            'code' => '246',
            'name' => 'Banco ABC Brasil S.A.',
            'site' => 'www.abcbrasil.com.br'
        ]);

        DB::table('banks')->insert([
            'code' => '299',
            'name' => 'Banco Afinz S.A. Banco Múltiplo',
            'site' => 'afinz.com.br'
        ]);

        DB::table('banks')->insert([
            'code' => '121',
            'name' => 'Banco Agibank S.A.',
            'site' => 'www.agibank.com.br'
        ]);

        DB::table('banks')->insert([
            'code' => '025',
            'name' => 'Banco Alfa S.A.',
            'site' => 'www.bancoalfa.com.br'
        ]);

        DB::table('banks')->insert([
            'code' => '065',
            'name' => 'Banco Andbank (Brasil) S.A.',
            'site' => 'www.andbank-lla.com.br'
        ]);

        DB::table('banks')->insert([
            'code' => '096',
            'name' => 'Banco B3 S.A.',
            'site' => 'www.bmfbovespa.com.br/bancobmfbovespa/'
        ]);

        DB::table('banks')->insert([
            'code' => '024',
            'name' => 'Banco BANDEPE S.A.',
            'site' => 'www.santander.com.br'
        ]);

        DB::table('banks')->insert([
            'code' => '318',
            'name' => 'Banco BMG S.A.',
            'site' => 'www.bancobmg.com.br'
        ]);

        DB::table('banks')->insert([
            'code' => '752',
            'name' => 'Banco BNP Paribas Brasil S.A.',
            'site' => 'www.bnpparibas.com.br'
        ]);

        DB::table('banks')->insert([
            'code' => '107',
            'name' => 'Banco BOCOM BBM S.A.',
            'site' => 'www.bancobbm.com.br'
        ]);

        DB::table('banks')->insert([
            'code' => '063',
            'name' => 'Banco Bradescard S.A.',
            'site' => 'www.ibi.com.br',
            'logo' => 'images/banks/bradesco.svg',
        ]);

        DB::table('banks')->insert([
            'code' => '036',
            'name' => 'Banco Bradesco BBI S.A.',
            'site' => 'Não possui site'
        ]);

        DB::table('banks')->insert([
            'code' => '394',
            'name' => 'Banco Bradesco Financiamentos S.A.',
            'site' => 'não tem site'
        ]);

        DB::table('banks')->insert([
            'code' => '237',
            'name' => 'Banco Bradesco S.A.',
            'site' => 'www.bradesco.com.br',
            'logo' => 'images/banks/bradesco.svg',
        ]);

        DB::table('banks')->insert([
            'code' => '218',
            'name' => 'Banco BS2 S.A.',
            'site' => 'www.bs2.com/banco/',
            'logo' => 'images/banks/bs2.svg',
        ]);

        DB::table('banks')->insert([
            'code' => '208',
            'name' => 'Banco BTG Pactual S.A.',
            'site' => 'www.btgpactual.com'
        ]);

        DB::table('banks')->insert([
            'code' => '626',
            'name' => 'Banco C6 Consignado S.A.',
            'site' => 'https://www.c6consig.com.br/',
            'logo' => 'images/banks/c6-bank.svg',
        ]);

        DB::table('banks')->insert([
            'code' => '',
            'name' => 'Banco C6 S.A.',
            'site' => 'https://www.c6bank.com/',
            'logo' => 'images/banks/c6-bank.svg',
        ]);

        DB::table('banks')->insert([
            'code' => '473',
            'name' => 'Banco Caixa Geral - Brasil S.A.',
            'site' => 'www.bcgbrasil.com.br'
        ]);

        DB::table('banks')->insert([
            'code' => '040',
            'name' => 'Banco Cargill S.A.',
            'site' => 'www.bancocargill.com.br'
        ]);

        DB::table('banks')->insert([
            'code' => '739',
            'name' => 'Banco Cetelem S.A.',
            'site' => 'www.cetelem.com.br'
        ]);

        DB::table('banks')->insert([
            'code' => '233',
            'name' => 'Banco Cifra S.A.',
            'site' => 'www.bancocifra.com.br'
        ]);

        DB::table('banks')->insert([
            'code' => '745',
            'name' => 'Banco Citibank S.A.',
            'site' => 'www.citibank.com.br'
        ]);

        DB::table('banks')->insert([
            'code' => '',
            'name' => 'Banco CNH Industrial Capital S.A.',
            'site' => 'www.cnhindustrialcapital.com'
        ]);

        DB::table('banks')->insert([
            'code' => '756',
            'name' => 'Banco Cooperativo Sicoob S.A.',
            'site' => 'www.Sicoob.com.br'
        ]);

        DB::table('banks')->insert([
            'code' => '748',
            'name' => 'Banco Cooperativo Sicredi S.A.',
            'site' => 'www.sicredi.com.br'
        ]);

        DB::table('banks')->insert([
            'code' => '222',
            'name' => 'Banco Credit Agricole Brasil S.A.',
            'site' => 'www.calyon.com.br'
        ]);

        DB::table('banks')->insert([
            'code' => '505',
            'name' => 'Banco Credit Suisse (Brasil) S.A.',
            'site' => 'www.csfb.com'
        ]);

        DB::table('banks')->insert([
            'code' => '',
            'name' => 'Banco CSF S.A.',
            'site' => ''
        ]);

        DB::table('banks')->insert([
            'code' => '003',
            'name' => 'Banco da Amazônia S.A.',
            'site' => 'www.bancoamazonia.com.br',
            'logo' => 'images/banks/banco-da-amazonia.svg',
        ]);

        DB::table('banks')->insert([
            'code' => '083',
            'name' => 'Banco da China Brasil S.A.',
            'site' => 'www.boc-brazil.com'
        ]);

        DB::table('banks')->insert([
            'code' => '707',
            'name' => 'Banco Daycoval S.A.',
            'site' => 'www.daycoval.com.br'
        ]);

        DB::table('banks')->insert([
            'code' => '',
            'name' => 'Banco de Lage Landen Brasil S.A.',
            'site' => 'www.dllgroup.com'
        ]);

        DB::table('banks')->insert([
            'code' => '654',
            'name' => 'Banco Digimais S.A.',
            'site' => 'www.bancodigimais.com.br/'
        ]);

        DB::table('banks')->insert([
            'code' => '',
            'name' => 'Banco Digio S.A.',
            'site' => 'www.aebb.com.br'
        ]);

        DB::table('banks')->insert([
            'code' => '001',
            'name' => 'Banco do Brasil S.A.',
            'site' => 'www.bb.com.br',
            'logo' => 'images/banks/banco-do-brasil.svg',
        ]);

        DB::table('banks')->insert([
            'code' => '047',
            'name' => 'Banco do Estado de Sergipe S.A.',
            'site' => 'www.banese.com.br'
        ]);

        DB::table('banks')->insert([
            'code' => '037',
            'name' => 'Banco do Estado do Pará S.A.',
            'site' => 'www.banpara.b.br'
        ]);

        DB::table('banks')->insert([
            'code' => '041',
            'name' => 'Banco do Estado do Rio Grande do Sul S.A.',
            'site' => 'www.banrisul.com.br'
        ]);

        DB::table('banks')->insert([
            'code' => '004',
            'name' => 'Banco do Nordeste do Brasil S.A.',
            'site' => 'www.banconordeste.gov.br'
        ]);

        DB::table('banks')->insert([
            'code' => '224',
            'name' => 'Banco Fibra S.A.',
            'site' => 'www.bancofibra.com.br'
        ]);

        DB::table('banks')->insert([
            'code' => '',
            'name' => 'Banco Fidis S.A.',
            'site' => 'www.bancofidis.com.br'
        ]);

        DB::table('banks')->insert([
            'code' => '094',
            'name' => 'Banco Finaxis S.A.',
            'site' => 'www.bancofinaxis.com.br'
        ]);

        DB::table('banks')->insert([
            'code' => '125',
            'name' => 'Banco Genial S.A.',
            'site' => 'www.bancogenial.com'
        ]);

        DB::table('banks')->insert([
            'code' => '',
            'name' => 'Banco GM S.A.',
            'site' => 'www.chevroletsf.com.br'
        ]);

        DB::table('banks')->insert([
            'code' => '612',
            'name' => 'Banco Guanabara S.A.',
            'site' => 'www.bancoguanabara.com.br'
        ]);

        DB::table('banks')->insert([
            'code' => '',
            'name' => 'Banco IBM S.A.',
            'site' => 'www.ibm.com/financing/br'
        ]);

        DB::table('banks')->insert([
            'code' => '012',
            'name' => 'Banco Inbursa S.A.',
            'site' => 'www.bancoinbursa.com'
        ]);

        DB::table('banks')->insert([
            'code' => '604',
            'name' => 'Banco Industrial do Brasil S.A.',
            'site' => 'www.bancoindustrial.com.br'
        ]);

        DB::table('banks')->insert([
            'code' => '077',
            'name' => 'Banco Inter S.A.',
            'site' => 'www.bancointer.com.br'
        ]);

        DB::table('banks')->insert([
            'code' => '249',
            'name' => 'Banco Investcred Unibanco S.A.',
            'site' => 'Não possui site'
        ]);

        DB::table('banks')->insert([
            'code' => '184',
            'name' => 'Banco Itaú BBA S.A.',
            'site' => 'www.itaubba.com.br'
        ]);

        DB::table('banks')->insert([
            'code' => '029',
            'name' => 'Banco Itaú Consignado S.A.',
            'site' => ''
        ]);

        DB::table('banks')->insert([
            'code' => '',
            'name' => 'Banco Itaú Veículos S.A.',
            'site' => 'www.bancofiat.com.br'
        ]);

        DB::table('banks')->insert([
            'code' => '479',
            'name' => 'Banco ItauBank S.A',
            'site' => 'www.itaubank.com.br',
            'logo' => 'images/banks/itau.svg',
        ]);

        DB::table('banks')->insert([
            'code' => '',
            'name' => 'Banco Itaucard S.A.',
            'site' => 'www.itau.com.br',
            'logo' => 'images/banks/itau.svg',
        ]);

        DB::table('banks')->insert([
            'code' => '376',
            'name' => 'Banco J. P. Morgan S.A.',
            'site' => 'www.jpmorgan.com'
        ]);

        DB::table('banks')->insert([
            'code' => '074',
            'name' => 'Banco J. Safra S.A.',
            'site' => 'www.safra.com.br',
            'logo' => 'images/banks/logo-safra.svg',
        ]);

        DB::table('banks')->insert([
            'code' => '217',
            'name' => 'Banco John Deere S.A.',
            'site' => 'www.johndeere.com.br'
        ]);

        DB::table('banks')->insert([
            'code' => '630',
            'name' => 'Banco Letsbank S.A.',
            'site' => 'www.letsbank.com.br'
        ]);

        DB::table('banks')->insert([
            'code' => '600',
            'name' => 'Banco Luso Brasileiro S.A.',
            'site' => 'www.lusobrasileiro.com.br'
        ]);

        DB::table('banks')->insert([
            'code' => '243',
            'name' => 'Banco Master S.A.',
            'site' => 'www.bancomaster.com.br'
        ]);

        DB::table('banks')->insert([
            'code' => '389',
            'name' => 'Banco Mercantil do Brasil S.A.',
            'site' => 'www.mercantil.com.br',
            'logo' => 'images/banks/banco-mercantil.svg',
        ]);

        DB::table('banks')->insert([
            'code' => '370',
            'name' => 'Banco Mizuho do Brasil S.A.',
            'site' => 'www.mizuhobank.com/brazil/pt/'
        ]);

        DB::table('banks')->insert([
            'code' => '746',
            'name' => 'Banco Modal S.A.',
            'site' => 'www.bancomodal.com.br'
        ]);

        DB::table('banks')->insert([
            'code' => '066',
            'name' => 'Banco Morgan Stanley S.A.',
            'site' => ''
        ]);

        DB::table('banks')->insert([
            'code' => '456',
            'name' => 'Banco MUFG Brasil S.A.',
            'site' => 'www.br.bk.mufg.jp'
        ]);

        DB::table('banks')->insert([
            'code' => '212',
            'name' => 'Banco Original S.A.',
            'site' => 'www.original.com.br',
            'logo' => 'images/banks/banco-original.svg',
        ]);

        DB::table('banks')->insert([
            'code' => '623',
            'name' => 'Banco PAN S.A.',
            'site' => 'www.bancopan.com.br'
        ]);

        DB::table('banks')->insert([
            'code' => '611',
            'name' => 'Banco Paulista S.A.',
            'site' => 'www.bancopaulista.com.br'
        ]);

        DB::table('banks')->insert([
            'code' => '643',
            'name' => 'Banco Pine S.A.',
            'site' => 'www.pine.com'
        ]);

        DB::table('banks')->insert([
            'code' => '747',
            'name' => 'Banco Rabobank International Brasil S.A.',
            'site' => 'www.rabobank.com.br'
        ]);

        DB::table('banks')->insert([
            'code' => '',
            'name' => 'Banco RCI Brasil S.A.',
            'site' => 'www.bancorenault.com.br'
        ]);

        DB::table('banks')->insert([
            'code' => '633',
            'name' => 'Banco Rendimento S.A.',
            'site' => 'www.rendimento.com.br'
        ]);

        DB::table('banks')->insert([
            'code' => '120',
            'name' => 'Banco Rodobens S.A.',
            'site' => 'www.rodobens.com.br'
        ]);

        DB::table('banks')->insert([
            'code' => '422',
            'name' => 'Banco Safra S.A.',
            'site' => 'www.safra.com.br',
            'logo' => 'images/banks/logo-safra.svg',
        ]);

        DB::table('banks')->insert([
            'code' => '033',
            'name' => 'Banco Santander  (Brasil)  S.A.',
            'site' => 'www.santander.com.br',
            'logo' => 'images/banks/banco-santander.svg',
        ]);

        DB::table('banks')->insert([
            'code' => '743',
            'name' => 'Banco Semear S.A.',
            'site' => 'www.bancosemear.com.br'
        ]);

        DB::table('banks')->insert([
            'code' => '276',
            'name' => 'Banco Senff S.A.',
            'site' => 'https://www.senff.com.br/'
        ]);

        DB::table('banks')->insert([
            'code' => '366',
            'name' => 'Banco Société Générale Brasil S.A.',
            'site' => 'www.sgbrasil.com.br'
        ]);

        DB::table('banks')->insert([
            'code' => '464',
            'name' => 'Banco Sumitomo Mitsui Brasileiro S.A.',
            'site' => 'www.smbcgroup.com.br'
        ]);

        DB::table('banks')->insert([
            'code' => '082',
            'name' => 'Banco Topázio S.A.',
            'site' => 'www.bancotopazio.com.br'
        ]);

        DB::table('banks')->insert([
            'code' => '',
            'name' => 'Banco Toyota do Brasil S.A.',
            'site' => 'www.bancotoyota.com.br'
        ]);

        DB::table('banks')->insert([
            'code' => '634',
            'name' => 'Banco Triângulo S.A.',
            'site' => 'www.tribanco.com.br'
        ]);

        DB::table('banks')->insert([
            'code' => '653',
            'name' => 'Banco Voiter S.A.',
            'site' => 'www.voiter.com'
        ]);

        DB::table('banks')->insert([
            'code' => '',
            'name' => 'Banco Volkswagen S.A.',
            'site' => 'www.bancovw.com.br'
        ]);

        DB::table('banks')->insert([
            'code' => '',
            'name' => 'Banco Volvo Brasil S.A.',
            'site' => 'Não possui site'
        ]);

        DB::table('banks')->insert([
            'code' => '655',
            'name' => 'Banco Votorantim S.A.',
            'site' => 'www.bancovotorantim.com.br'
        ]);

        DB::table('banks')->insert([
            'code' => '610',
            'name' => 'Banco VR S.A.',
            'site' => 'www.vrinvestimentos.com.br'
        ]);

        DB::table('banks')->insert([
            'code' => '119',
            'name' => 'Banco Western Union do Brasil S.A.',
            'site' => 'www.bancowesternunion.com.br'
        ]);

        DB::table('banks')->insert([
            'code' => '348',
            'name' => 'Banco XP S.A.',
            'site' => ''
        ]);

        DB::table('banks')->insert([
            'code' => '',
            'name' => 'Banco Yamaha Motor do Brasil S.A.',
            'site' => 'www.yamaha-motor.com.br'
        ]);

        DB::table('banks')->insert([
            'code' => '021',
            'name' => 'BANESTES S.A. Banco do Estado do Espírito Santo',
            'site' => 'www.banestes.com.br'
        ]);

        DB::table('banks')->insert([
            'code' => '755',
            'name' => 'Bank of America Merrill Lynch Banco Múltiplo S.A.',
            'site' => 'www.ml.com'
        ]);

        DB::table('banks')->insert([
            'code' => '250',
            'name' => 'BCV - Banco de Crédito e Varejo S.A.',
            'site' => 'www.bancobcv.com.br'
        ]);

        DB::table('banks')->insert([
            'code' => '144',
            'name' => 'BEXS Banco de Câmbio S.A.',
            'site' => 'www.bexs.com.br'
        ]);

        DB::table('banks')->insert([
            'code' => '017',
            'name' => 'BNY Mellon Banco S.A.',
            'site' => 'www.bnymellon.com.br'
        ]);

        DB::table('banks')->insert([
            'code' => '070',
            'name' => 'BRB - Banco de Brasília S.A.',
            'site' => 'www.brb.com.br',
            'logo' => 'images/banks/brb-logo.svg',
        ]);

        DB::table('banks')->insert([
            'code' => '104',
            'name' => 'Caixa Econômica Federal',
            'site' => 'www.caixa.gov.br',
            'logo' => 'images/banks/caixa-economica-federal.svg',
        ]);

        DB::table('banks')->insert([
            'code' => '320',
            'name' => 'China Construction Bank (Brasil) Banco Múltiplo S.A.',
            'site' => 'www.br.ccb.com'
        ]);

        DB::table('banks')->insert([
            'code' => '477',
            'name' => 'Citibank N.A.',
            'site' => 'www.citibank.com'
        ]);

        DB::table('banks')->insert([
            'code' => '487',
            'name' => 'Deutsche Bank S.A. - Banco Alemão',
            'site' => 'www.deutsche-bank.com.br'
        ]);

        DB::table('banks')->insert([
            'code' => '062',
            'name' => 'Hipercard Banco Múltiplo S.A.',
            'site' => 'www.hipercard.com.br'
        ]);

        DB::table('banks')->insert([
            'code' => '269',
            'name' => 'HSBC Brasil S.A. - Banco de Investimento',
            'site' => ''
        ]);

        DB::table('banks')->insert([
            'code' => '341',
            'name' => 'Itaú Unibanco S.A.',
            'site' => 'www.itau.com.br',
            'logo' => 'images/banks/itau.svg',
        ]);

        DB::table('banks')->insert([
            'code' => '488',
            'name' => '"JPMorgan Chase Bank, National Association"',
            'site' => 'www.jpmorganchase.com'
        ]);

        DB::table('banks')->insert([
            'code' => '399',
            'name' => 'Kirton Bank S.A. - Banco Múltiplo',
            'site' => ''
        ]);

        DB::table('banks')->insert([
            'code' => '128',
            'name' => 'MS Bank S.A. Banco de Câmbio',
            'site' => 'www.msbank.com.br'
        ]);

        DB::table('banks')->insert([
            'code' => '254',
            'name' => 'Paraná Banco S.A.',
            'site' => 'www.paranabanco.com.br'
        ]);

        DB::table('banks')->insert([
            'code' => '',
            'name' => 'Scania Banco S.A.',
            'site' => 'www.scaniabanco.com.br'
        ]);

        DB::table('banks')->insert([
            'code' => '751',
            'name' => 'Scotiabank Brasil S.A. Banco Múltiplo',
            'site' => 'www.br.scotiabank.com'
        ]);

        DB::table('banks')->insert([
            'code' => '014',
            'name' => 'State Street Brasil S.A. - Banco Comercial',
            'site' => 'www.statestreet.com'
        ]);

        DB::table('banks')->insert([
            'code' => '095',
            'name' => 'Travelex Banco de Câmbio S.A.',
            'site' => 'www.bancoconfidence.com.br'
        ]);

        DB::table('banks')->insert([
            'code' => '129',
            'name' => 'UBS Brasil Banco de Investimento S.A.',
            'site' => 'www.ubs.com'
        ]);

    }

}
