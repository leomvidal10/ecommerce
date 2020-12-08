import { Body, Controller, Delete, Get, Param, Post, Put } from '@nestjs/common';
import { ApiTags } from '@nestjs/swagger';
import { User } from './users.entity';
import { UserService } from './users.service';

@ApiTags('users')
@Controller('users')
export class UserController {
    constructor(public readonly service: UserService) {}

    @Get()
    getUsers() {
        return this.service.pegarUsers();
    }

    @Post()
    cadastrarUser(@Body() user: User) {
        return this.service.cadastrarUser(user);
    }

    @Get(":uuid")
    pegarUser(@Param('uuid') userUuid: string) {
        return this.service.pegarUser(userUuid);
    }

    @Delete(':uuid')
    removerUser(@Param('uuid') userUuid: string) {
        return this.service.removerUser(userUuid);
    }

    @Put(':uuid')
    update(@Param('uuid') uuid: string, @Body() user: User) {
        return this.service.editUser(uuid, user);
    }
}