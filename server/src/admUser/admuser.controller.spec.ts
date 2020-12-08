import { Test, TestingModule } from '@nestjs/testing';
import { admUserController } from './admuser.controller';

describe('ProdutoController', () => {
  let controller: admUserController;

  beforeEach(async () => {
    const module: TestingModule = await Test.createTestingModule({
      controllers: [admUserController],
    }).compile();

    controller = module.get<admUserController>(admUserController);
  });

  it('should be defined', () => {
    expect(controller).toBeDefined();
  });
});
