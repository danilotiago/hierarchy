<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // =============================================
        // criando nó raiz
        // =============================================

        $paiA = User::create([
            'name' => 'Pai A',
            'email' => 'paiA@paiA.com',
            'password' => bcrypt('123456')
        ]);
        // torna como raiz, logo nao terá um pai
        $paiA->saveAsRoot();


        $filhoA1 = User::create(['name' => 'FilhoA 1','email' => 'Afilho@filho1.com','password' => bcrypt('123456')]);
        $filhoA1->appendToNode($paiA)->save();

        $filhoA2 = User::create(['name' => 'FilhoA 2','email' => 'Afilho@filho2.com','password' => bcrypt('123456')]);
        $filhoA2->appendToNode($paiA)->save();

        $filhoA3 = User::create(['name' => 'FilhoA 3','email' => 'Afilho@filho3.com','password' => bcrypt('123456')]);
        $filhoA3->appendToNode($paiA)->save();

        $filhoA4 = User::create(['name' => 'FilhoA 4','email' => 'Afilho@filho4.com','password' => bcrypt('123456')]);
        $filhoA4->appendToNode($paiA)->save();

        $filhoA5 = User::create(['name' => 'FilhoA 5','email' => 'Afilho@filho5.com','password' => bcrypt('123456')]);
        $filhoA5->appendToNode($paiA)->save();

        $filhoA6 = User::create(['name' => 'FilhoA 6','email' => 'Afilho@filho6.com','password' => bcrypt('123456')]);
        $filhoA6->appendToNode($paiA)->save();

        $filhoA7 = User::create(['name' => 'FilhoA 7','email' => 'Afilho@filho7.com','password' => bcrypt('123456')]);
        $filhoA7->appendToNode($paiA)->save();

        $filhoA8 = User::create(['name' => 'FilhoA 8','email' => 'Afilho@filho8.com','password' => bcrypt('123456')]);
        $filhoA8->appendToNode($paiA)->save();

        $filhoA9 = User::create(['name' => 'FilhoA 9','email' => 'Afilho@filho9.com','password' => bcrypt('123456')]);
        $filhoA9->appendToNode($paiA)->save();

        $filhoA10 = User::create(['name' => 'FilhoA 10','email' => 'Afilho@filho10.com','password' => bcrypt('123456')]);
        $filhoA10->appendToNode($paiA)->save();

        $filhoA10 = User::create(['name' => 'netoA 1','email' => 'Aneto@Aneto1.com','password' => bcrypt('123456')]);
        $filhoA10->appendToNode($filhoA1)->save();

        $filhoA10 = User::create(['name' => 'netoA 3','email' => 'Aneto@neto3.com','password' => bcrypt('123456')]);
        $filhoA10->appendToNode($filhoA3)->save();

        $filhoA10 = User::create(['name' => 'netoA 5','email' => 'Aneto@neto5.com','password' => bcrypt('123456')]);
        $filhoA10->appendToNode($filhoA5)->save();

        $filhoA10 = User::create(['name' => 'neto segundo A 3','email' => 'Aneto@6.com','password' => bcrypt('123456')]);
        $filhoA10->appendToNode($filhoA3)->save();

        $paiB = User::create([
            'name' => 'Pai B',
            'email' => 'paiB@paiB.com',
            'password' => bcrypt('123456')
        ]);
        $paiB->saveAsRoot();

        $filhoB1 = User::create(['name' => 'FilhoB 1','email' => 'Bfilho@filho1.com','password' => bcrypt('123456')]);
        $filhoB1->appendToNode($paiB)->save();

        $filhoB2 = User::create(['name' => 'FilhoB 2','email' => 'Bfilho@filho2.com','password' => bcrypt('123456')]);
        $filhoB2->appendToNode($paiB)->save();

        $filhoB3 = User::create(['name' => 'FilhoB 3','email' => 'Bfilho@filho3.com','password' => bcrypt('123456')]);
        $filhoB3->appendToNode($paiB)->save();

        $filhoB4 = User::create(['name' => 'FilhoB 4','email' => 'Bfilho@filho4.com','password' => bcrypt('123456')]);
        $filhoB4->appendToNode($paiB)->save();

        $filhoB5 = User::create(['name' => 'FilhoB 5','email' => 'Bfilho@filho5.com','password' => bcrypt('123456')]);
        $filhoB5->appendToNode($paiB)->save();

        $filhoA6 = User::create(['name' => 'FilhoB 6','email' => 'Bfilho@filho6.com','password' => bcrypt('123456')]);
        $filhoA6->appendToNode($paiB)->save();

        $filhoB7 = User::create(['name' => 'FilhoB 7','email' => 'Bfilho@filho7.com','password' => bcrypt('123456')]);
        $filhoB7->appendToNode($paiB)->save();

        $filhoB8 = User::create(['name' => 'FilhoB 8','email' => 'Bfilho@filho8.com','password' => bcrypt('123456')]);
        $filhoB8->appendToNode($paiB)->save();

        $filhoB9 = User::create(['name' => 'FilhoB 9','email' => 'Bfilho@filho9.com','password' => bcrypt('123456')]);
        $filhoB9->appendToNode($paiB)->save();

        $filhoB10 = User::create(['name' => 'FilhoB 10','email' => 'Bfilho@filho10.com','password' => bcrypt('123456')]);
        $filhoB10->appendToNode($paiB)->save();

        // =============================================
        // criando nós já com filhos da forma recursiva
        // =============================================

        // criando com filhos
        /*User::create([
            'name' => 'Pai C',
            'email' => 'paiC@paiC.com',
            'password' => bcrypt('123456'),

            'children' => [
                [
                    'name' => 'FilhoC 1',
                    'email' => 'Cfilho@filho1.com',
                    'password' => bcrypt('123456'),
                ],
                [
                    'name' => 'FilhoC 2',
                    'email' => 'Cfilho@filho2.com',
                    'password' => bcrypt('123456'),
                ],
            ],
        ]);*/

        //  criando pai com filhos e netos
        /*User::create([
            'name' => 'Pai C',
            'email' => 'paiC@paiC.com',
            'password' => bcrypt('123456'),

            'children' => [
                [
                    'name' => 'FilhoC 1',
                    'email' => 'Cfilho@filho1.com',
                    'password' => bcrypt('123456'),
                    'children' => [
                        [
                            'name' => 'NetoA 1',
                            'email' => 'Aneto@Aneto1.com',
                            'password' => bcrypt('123456'),
                        ],
                    ],
                ],
            ],
        ]);*/

        // =============================================
        // colocando nós na vizinhança (lado a lado) (movendo de posição)
        // =============================================

        // #1 alinha após (depois) do vizinho
        /*$filhoB3->afterNode($filhoA2)->save();
        $filhoB3->insertAfterNode($filhoA2); // (sem save: implicito)*/

        // #2 alinha antes do vizinho
        /*$filhoB3->beforeNode($filhoA2)->save(); //(save pois é explícito)
        $filhoB3->insertBeforeNode($filhoA2); // (sem save: implicito)*/

        // =============================================
        // amarrando nós
        // =============================================

        // #1 Amarrando pelo próprio objeto e passando um pai, retorna true ou false caso consiga amarrar
        /*$filho = User::create([
            'name' => 'Filho',
            'email' => 'filho@filho.com',
            'password' => bcrypt('123456')
        ])->appendToNode($pai)->save();*/

        // #2 Amarrando a partir de um pai e passando o objeto criado
        /*$filho = User::create([
            'name' => 'Filho',
            'email' => 'filho@filho.com',
            'password' => bcrypt('123456')
        ]);
        $pai->appendNode($filho);*/

        // #3 Gerando um filho e o amarrando como filho
        /*$pai->children()->create([
            'name' => 'Filho',
            'email' => 'filho@filho.com',
            'password' => bcrypt('123456')
        ]);*/

        // #4 Amarrando um filho a um pai
        /*$filho = User::create([
            'name' => 'Filho',
            'email' => 'filho@filho.com',
            'password' => bcrypt('123456')
        ]);
        $filho->parent()->associate($pai)->save();*/

        // #5 Amarrando a um pai pelo id do pai
        /*$filho = User::create([
            'name' => 'Filho',
            'email' => 'filho@filho.com',
            'password' => bcrypt('123456')
        ]);
        $filho->parent_id = $pai->id;
        $filho->save();*/

        // #& outras formas
        /*$filho = User::create([
            'name' => 'Filho',
            'email' => 'filho@filho.com',
            'password' => bcrypt('123456')
        ]);
        $filho->prependToNode($pai)->save(); // amarracao a partir do filho
        $pai->prependNode($filho); // amarracao a partir do pai*/

        // =============================================
        // remontando a arvore do zero
        // =============================================

        /*$data = [[
            'name' => 'Pai C',
            'email' => 'paiC@paiC.com',
            'password' => bcrypt('123456'),

            'children' => [
                [
                    'name' => 'FilhoC 1',
                    'email' => 'Cfilho@filho1.com',
                    'password' => bcrypt('123456'),
                    'children' => [
                        [
                            'name' => 'NetoA 1',
                            'email' => 'Aneto@Aneto1.com',
                            'password' => bcrypt('123456'),
                        ],
                    ],
                ],
            ],
        ]];
        User::rebuildTree($data);*/

        // =============================================
        // remontando a arvore a partir de um nó raíz
        // =============================================

        /*$data = [
            ['name' => 'filho 1', 'email' => 'email@email.com', 'password' => '123456', 'children' => [
                ['name' => 'neto 1', 'email' => 'neto@email.com', 'password' => '123456']
            ]]
        ];
        User::rebuildSubTree($paiA, $data);*/

        // =============================================
        // recuperando nós
        // =============================================

        // #1 pegando os filhos de primeiro grau
        //$paiA->children;

        // #2 pegando os pais ate os avos em diante
        //$filhoA1->ancestors;

        // #3 pegando os filhos ate os netos em diante
        //$filhoA1->descendants;

        // #4 pegando os pais ate os avos em diante de um user especifico
        //User::ancestorsOf($id);

        // #4.1 pegando os pais ate os avos em diante de um user especifico inclusive ele
        //User::ancestorsAndSelf($id);

        // #5 pegando os filhos ate os netos em diante de um user especifico
        //User::descendantsOf($id);

        // #5.1 pegando os filhos ate os netos em diante de um user especifico inclusive ele
        //User::descendantsAndSelf($id);

        // #6 pega os pais e avos etc, ordenados pela hierarquia
        //User::defaultOrder()->ancestorsOf($id);

        // #7 pega os filhos ate os netos em diante, ordenados pela hierarquia
        //User::defaultOrder()->ancestorsOf($id);

        // #8 pega todos seus irmaos
        //$user->getSiblings();

        // #9 pega apenas seu pŕoximo irmão
        //$user->getNextSibling();

        // #10 pega todos os proximos irmaos a partir do nó atual
        // $user->getNextSiblings();

        // #11 pega apenas seu irmao anterior
        //$user->getPrevSibling();

        // #12 pega todos seus irmaos anteriores
        //$user->getPrevSibling();

        // #13 pegando todas as roles na hierarquia de usuarios
        /*$user = \App\User::find($id);
        $users = $user->descendants()->pluck('id');
        $users[] = $user->getKey();
        return \App\Role::whereIn('user_id', $users)->get();*/

        // #14 pega qual a profundidade do nó, ou seja, qual geração de familia o nó é. o raíz é zero
        // \App\User::withDepth()->find($id)->depth;

        // #15 pega os usuarios de acordo com a geracao (profundidade do nó)
        // \App\User::withDepth()->having('depth', '=', '2')->get();

        // =============================================
        // ordenando nós
        // =============================================

        // #1 ordenando na ordem hierarquica
        // \App\User::defaultOrder()->get();

        // #2 ordenando na ordem inversa da hierarquica
        // \App\User::reversed()->get();

        // #3 subindo um nó de posição
        // $user->up()

        // #3 descendo um nó de posição
        // $user->down()

        // 4# pega apenas os nós raíz
        // App\User::whereIsRoot()->get();

        // 5# pega exatamente todos os nós após o id especificado
        // \App\User::whereIsAfter($id)->get();

        // 6# pega exatamente todos os nós anteriores ao id especificado
        // \App\User::whereIsBefore($id)->get();

        // 7# pega todos os flhos e netos de um user especificado
        // \App\User::whereDescendantOf($user)->get();

        // 8# pega todos que nao sejam seus filhos
        // \App\User::whereNotDescendantOf($user)->get();

        // 9# pega o nó e seus filhos
        // \App\User::whereDescendantOrSelf($user)->get();

        // 10# pega o nó e seus pais
        //\App\User::whereAncestorOrSelf($user->id)->get();

        // =============================================
        // construindo a arvore
        // =============================================

        // #1 retorna a arvore com seus filhos ja formatados no array
        // \App\User::get()->toTree();

        // #2 retorna uma fila plana (pouco usado)
        // \App\User::get()->toFlatTree();

        // #3 retorna a arvore com seus filhos ja formatados no array a partir de um nó especificado
        // \App\User::descendantsAndSelf($id)->toTree()->first();

        // #4 retorna a arvore apenas com seus filhos e netos a partir de um nó especificado
        // \App\User::descendantsOf($id)->toTree($id);

        // =============================================
        // excluindo um nó
        // =============================================

        // #1 apaga o nó e toda sua heranca
        // $user->delete();

        // =============================================
        // metodos auxiliares
        // =============================================

        // verifica se um nó é descendente de outro
        // $userA->isDescendantOf($userB)

        // verifica se é um nó raíz
        // $node->isRoot();

        /**
         *  $node->isChildOf($other);
            $node->isAncestorOf($other);
            $node->isSiblingOf($other);
            $node->isLeaf()
         */

        // verifica se a arvore esta quebrada
        // \App\User::isBroken()

        // percentuais de nós quebrados
        // \App\User::countErrors()

        // tenta corrigir a arvore
        // \App\User::fixTree();

    }
}