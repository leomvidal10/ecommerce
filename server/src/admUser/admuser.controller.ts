import { Body, Controller, Delete, Get, Param, Post, Put } from '@nestjs/common';
import { admUser } from './admuser.entity';
import { admUserService } from './adm.service';
import { ApiTags } from '@nestjs/swagger';

@ApiTags('admUser')
@Controller('admUser')
export class admUserController {
    constructor(public readonly service: admUserService) {}
    
    @Get()
    pegarUsers() {
        return this.service.pegarUsers();
    }

    @Post()
    cadastrarUser(@Body() admuser: admUser) {
        return this.service.cadastrarUser(admuser);
    }

    @Get(":uuid")
    pegarUser(@Param('uuid') admUserUuid: string) {
        return this.service.pegarUser(admUserUuid);
    }

    @Delete(':uuid')
    removerUser(@Param('uuid') admUserUuid: string)  {
        return this.service.removerUser(admUserUuid);
    }

    @Put(':uuid')
    editUser(@Param('uuid') uuid: string, @Body() admUser: admUser) {
      return this.service.editUser(uuid, admUser);
    }
}