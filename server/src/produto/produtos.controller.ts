import { Body, Controller, Delete, Get, Param, Post, Put } from '@nestjs/common';
import { ApiTags } from '@nestjs/swagger';
import { Produto } from './produtos.entity';
import { ProdutoService } from './produtos.service';

@ApiTags('produto')
@Controller('produto')
export class ProdutoController {
    constructor(public readonly service: ProdutoService) {}
    
    @Get()
    getProdutos() {
        return this.service.pegarProdutos();
    }

    @Post()
    criarProduto(@Body() produto: Produto) {
        return this.service.criarProduto(produto);
    }

    @Get(":uuid")
    pegarProduto(@Param('uuid') produtoUuid: string) {
        return this.service.pegarProduto(produtoUuid);
    }

    @Delete(':uuid')
    removeProduto(@Param('uuid') produtoUuid: string)  {
        return this.service.removerProduto(produtoUuid);
    }

    @Put(':uuid')
    update(@Param('uuid') uuid: string, @Body() produto: Produto) {
      return this.service.editProduto(uuid, produto);
    }
}