import { Injectable } from '@nestjs/common';
import { InjectRepository } from '@nestjs/typeorm';
import { Repository } from 'typeorm';
import { User } from './users.entity';

@Injectable()
export class UserService {
    constructor(
        @InjectRepository(User)
        public repo: Repository<User>,
    ) {
    }

    cadastrarUser(user: Partial<User>) {
        return this.repo.save(user)
    }

    pegarUsers() {
        return this.repo.find()
    }

    pegarUser(userUuid: string) {
        return this.repo.findOne(userUuid)
    }

    removerUser(uuid: string) {
        return this.repo.delete(uuid);
    }

    editUser(uuid: string, produto: Partial<User>) {
        return this.repo.update(uuid, produto)
    }
}