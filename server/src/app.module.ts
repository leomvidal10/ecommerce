import { Module } from '@nestjs/common';
import { TypeOrmModule } from '@nestjs/typeorm';

import { UsersModule } from './user/users.module';
import { User } from './user/users.entity';

import { ProdutoModule } from './produto/produtos.module';
import { Produto } from './produto/produtos.entity';

import { admUserModule } from './admUser/admuser.module';
import { admUser } from './admUser/admuser.entity';

@Module({
  imports: [
    TypeOrmModule.forRoot({
      type: 'mysql',
      host: 'localhost',
      port: 3306,
      username: 'root',
      password: '',
      database: 'ecommerce',
      entities: [User, Produto, admUser],
      synchronize: true,
    }),
    UsersModule, ProdutoModule, admUserModule
  ],
})

export class AppModule { }