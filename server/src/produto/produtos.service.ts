import { Injectable } from '@nestjs/common';
import { InjectRepository } from '@nestjs/typeorm';
import { Repository } from 'typeorm';
import { Produto } from './produtos.entity';

@Injectable()
export class ProdutoService {
    constructor(@InjectRepository(Produto) public repo: Repository<Produto>) {
    }

    criarProduto(produto: Partial<Produto>) {
        return this.repo.save(produto)
    }

    pegarProdutos() {
        return this.repo.find()
    }

    pegarProduto(produtoUuid: string) {
        return this.repo.findOne(produtoUuid)
    }

    removerProduto(uuid: string) {
        return this.repo.delete(uuid);
    }

    editProduto(uuid: string, produto: Partial<Produto>)  {
        return this.repo.update(uuid, produto)
    }
}