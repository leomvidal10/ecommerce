import { Module } from '@nestjs/common';
import { TypeOrmModule } from '@nestjs/typeorm';
import { admUserController } from './admuser.controller';
import { admUser } from './admuser.entity';
import { admUserService } from './adm.service';

@Module({
  imports: [TypeOrmModule.forFeature([admUser])],
  controllers: [admUserController],
  providers: [admUserService],
  exports: [admUserService]
})

export class admUserModule {}