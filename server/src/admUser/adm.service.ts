import { Injectable } from '@nestjs/common';
import { InjectRepository } from '@nestjs/typeorm';
import { Repository } from 'typeorm';
import { admUser } from './admuser.entity';

@Injectable()
export class admUserService {
    constructor(@InjectRepository(admUser) public repo: Repository<admUser>) {
    }

    cadastrarUser(admUser : Partial<admUser>) {
        return this.repo.save(admUser)
    }

    pegarUsers() {
        return this.repo.find()
    }

    pegarUser(admUserUuid: string) {
        return this.repo.findOne(admUserUuid)
    }

    removerUser(uuid: string) {
        return this.repo.delete(uuid);
    }

    editUser(uuid: string, admUser: Partial<admUser>)  {
        return this.repo.update(uuid, admUser)
    }
}