  <?php $permissions = \app\Controllers\BaseController::$permissionsSession ?>
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?= base_url(); ?>/assets/adminlte/dist/img/logo_vipol.png" alt="Vipol Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">VIPOL</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url(); ?>/assets/adminlte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/home" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <?php if (in_array(2, $permissions)) { ?>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  Presidencia
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <?php if (in_array(3, $permissions)) { ?>
                  <li class="nav-item">
                    <a href="./index2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Ingresos
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <?php if (in_array(6, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Ficha de Socios
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                    </ul>
                  </li>
                <?php } ?>
                <?php if (in_array(4, $permissions)) { ?>
                  <li class="nav-item">
                    <a href="./index2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Consultas
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <?php if (in_array(7, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Ficha de Socios
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-circle"></i>
                          <p>
                            Control Documentario
                          </p>
                        </a>
                      </li>
                      <?php if (in_array(8, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Resumen Ingreso/Egreso
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(9, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Res. Ingr. Prog. Vivien.
                              <i class="right fas fa-angle-left"></i>
                            </p>
                          </a>
                          <ul class="nav nav-treeview">
                            <li class="nav-item">
                              <a href="#" class="nav-link">
                                <i class="far fa-dot-circle nav-icon"></i>
                                <p>Por Caja</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="#" class="nav-link">
                                <i class="far fa-dot-circle nav-icon"></i>
                                <p>Por Planilla</p>
                              </a>
                            </li>
                          </ul>
                        </li>
                      <?php } ?>
                      <?php if (in_array(10, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Res.Ing.Prog.+Cod Desc.
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(10, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Res. Ingr. x Cod Desc.
                              <i class="right fas fa-angle-left"></i>
                            </p>
                          </a>
                          <ul class="nav nav-treeview">
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="far fa-dot-circle nav-icon"></i>
                                <p>
                                  Por Caja
                                  <i class="right fas fa-angle-left"></i>
                                </p>
                              </a>
                              <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="#" class="nav-link">
                                    <i class="fas fa-circle nav-icon"></i>
                                    <p>Con Interes</p>
                                  </a>
                                </li>
                                <li class="nav-item">
                                  <a href="#" class="nav-link">
                                    <i class="fas fa-circle nav-icon"></i>
                                    <p>Sin Interes</p>
                                  </a>
                                </li>
                              </ul>
                            </li>
                            <li class="nav-item">
                              <a href="#" class="nav-link">
                                <i class="far fa-dot-circle nav-icon"></i>
                                <p>Por Planilla</p>
                              </a>
                            </li>
                          </ul>
                        </li>
                      <?php } ?>
                      <?php if (in_array(11, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Resumen de Ingreso x Día
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(12, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Res. Titulo de Propiedad
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-circle"></i>
                          <p>
                            Ing.Anual x Prog.Vivien.
                            <i class="right fas fa-angle-left"></i>
                          </p>
                        </a>
                        <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="#" class="nav-link">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>Por Caja</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>Por Planilla</p>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-circle"></i>
                          <p>
                            Ing.Anual Prog+Cod.Desc
                          </p>
                        </a>
                      </li>
                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-circle"></i>
                          <p>
                            Ing.Anual Cod.Desc.Caja
                          </p>
                        </a>
                      </li>
                    </ul>
                  </li>
                <?php } ?>
                <?php if (in_array(5, $permissions)) { ?>
                  <li class="nav-item">
                    <a href="./index2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Reportes
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <?php if (in_array(13, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="./index2.html" class="nav-link">
                            <i class="fas fa-circle nav-icon"></i>
                            <p>
                              Por orden Alfabético
                              <i class="right fas fa-angle-left"></i>
                            </p>
                          </a>
                          <ul class="nav nav-treeview">
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="nav-icon far fa-dot-circle"></i>
                                <p>
                                  Gnrl Detall.(Format. Grand)
                                </p>
                              </a>
                            </li>
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="nav-icon far fa-dot-circle"></i>
                                <p>
                                  Gnral Acum:Fdo.Ser.Gto.Adm
                                </p>
                              </a>
                            </li>
                          </ul>
                        </li>
                      <?php } ?>
                      <?php if (in_array(14, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Padrón Gral. de Socios
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(15, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="./index2.html" class="nav-link">
                            <i class="fas fa-circle nav-icon"></i>
                            <p>
                              Aportes Efectuados
                              <i class="right fas fa-angle-left"></i>
                            </p>
                          </a>
                          <ul class="nav nav-treeview">
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="nav-icon far fa-dot-circle"></i>
                                <p>
                                  Direco-PNP
                                </p>
                              </a>
                            </li>
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="nav-icon far fa-dot-circle"></i>
                                <p>
                                  Caja Militar
                                </p>
                              </a>
                            </li>
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="nav-icon far fa-dot-circle"></i>
                                <p>
                                  O.G.A
                                </p>
                              </a>
                            </li>
                          </ul>
                        </li>
                      <?php } ?>
                      <?php if (in_array(16, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Acu.Fdo: Soc./Sevl x Prg Viv
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-circle"></i>
                          <p>
                            Deud.Fdo:Soc./Svl/Gto.AxP
                          </p>
                        </a>
                      </li>
                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-circle"></i>
                          <p>
                            Reporte Especial Dic.2006
                          </p>
                        </a>
                      </li>
                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-circle"></i>
                          <p>
                            Genera Tbl.Esp. Dic.2006
                          </p>
                        </a>
                      </li>
                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-circle"></i>
                          <p>
                            Lis.lo Generad Esp Dic.2006
                          </p>
                        </a>
                      </li>
                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-circle"></i>
                          <p>
                            Acum.Fdo:Aport.Ext.Serlav
                          </p>
                        </a>
                      </li>
                    </ul>
                  </li>
                <?php } ?>
                <li class="nav-item">
                  <a href="./index2.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                      Proceso
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>

                  <ul class="nav nav-treeview">
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Cambio Fecha Proceso
                        </p>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
          <?php } ?>

          <?php if (in_array(17, $permissions)) { ?>
            <li class="nav-item">
              <a href="gallery.html" class="nav-link">
                <i class="nav-icon fas fa-money-check"></i>
                <p>
                  Caja
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <?php if (in_array(18, $permissions)) { ?>
                  <li class="nav-item">
                    <a href="./index2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Maestros
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>

                    <ul class="nav nav-treeview">
                      <?php if (in_array(22, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Conceptos de Descuento
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(23, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="./index2.html" class="nav-link">
                            <i class="fas fa-circle nav-icon"></i>
                            <p>
                              Transferencia a Contab.
                              <i class="right fas fa-angle-left"></i>
                            </p>
                          </a>
                          <ul class="nav nav-treeview">
                            <?php if (in_array(24, $permissions)) { ?>
                              <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                  <i class="nav-icon far fa-dot-circle"></i>
                                  <p>
                                    Ingresos de caja
                                  </p>
                                </a>
                              </li>
                            <?php } ?>
                            <?php if (in_array(25, $permissions)) { ?>
                              <li class="nav-item has-treeview">
                                <a href="./index2.html" class="nav-link">
                                  <i class="fas fa-dot-circle nav-icon"></i>
                                  <p>
                                    Egresos de caja
                                    <i class="right fas fa-angle-left"></i>
                                  </p>
                                </a>
                                <ul class="nav nav-treeview">
                                  <?php if (in_array(27, $permissions)) { ?>
                                    <li class="nav-item has-treeview">
                                      <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-circle"></i>
                                        <p>
                                          Vales Prov./Defin.
                                        </p>
                                      </a>
                                    </li>
                                  <?php } ?>
                                  <?php if (in_array(28, $permissions)) { ?>
                                    <li class="nav-item has-treeview">
                                      <a href="#" class="nav-link">
                                        <i class="nav-icon far fa-dot-circle"></i>
                                        <p>
                                          Descuentos Indebidos
                                        </p>
                                      </a>
                                    </li>
                                  <?php } ?>
                                </ul>
                              </li>
                            <?php } ?>
                            <?php if (in_array(26, $permissions)) { ?>
                              <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                  <i class="nav-icon far fa-dot-circle"></i>
                                  <p>
                                    Regularizaciones
                                  </p>
                                </a>
                              </li>
                            <?php } ?>
                          </ul>
                        </li>
                      <?php } ?>
                    </ul>
                  </li>
                <?php } ?>
                <?php if (in_array(19, $permissions)) { ?>
                  <li class="nav-item">
                    <a href="./index2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Movimientos
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>

                    <ul class="nav nav-treeview">
                      <?php if (in_array(29, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Ingreso de cobranzas
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(30, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Emisión de Recibos
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(31, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Regularización de Recibos
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(31, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Descuentos Indebidos
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(32, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Pagos de Aportes Extraord.
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                    </ul>
                  </li>
                <?php } ?>
                <?php if (in_array(20, $permissions)) { ?>
                  <li class="nav-item">
                    <a href="./index2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Consultas
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>

                    <ul class="nav nav-treeview">
                      <?php if (in_array(34, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Plan de Ctas.
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(35, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Centros de Costos
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(36, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Códigos Auxiliares
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(37, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Tabla de Documentos
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(38, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Tabla Tipo Cambio
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(39, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Fichas de Socios
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(40, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Estados de Ctas Ctes.
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(41, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Orden de Pago
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(42, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Monto de Ing. x Bancos
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(43, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Resúm de Ings/Egresos
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(44, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Recib. que FALT.ACTUAL.
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                    </ul>
                  </li>
                <?php } ?>
                <?php if (in_array(21, $permissions)) { ?>
                  <li class="nav-item">
                    <a href="./index2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Reportes
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>

                    <ul class="nav nav-treeview">

                      <?php if (in_array(268, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Detalle de Ing. Diarios
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(269, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Resum. de Ingr. x Dia
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(270, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Res.de Ing.Diar.xCod.Aux.
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(271, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Res. de Ing.xCta. Conta.
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(272, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Gastos Definitivos
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(273, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Descuentos Indebidos
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(274, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Recibos Provisionales
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(275, $permissions)) { ?>
                        <li class="nav-item">
                          <a href="./index2.html" class="nav-link">
                            <i class="fas fa-circle nav-icon"></i>
                            <p>
                              Pendie. de Regul.
                              <i class="right fas fa-angle-left"></i>
                            </p>
                          </a>

                          <ul class="nav nav-treeview">
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="nav-icon far fa-dot-circle"></i>
                                <p>
                                  Por Rango de Fecha
                                </p>
                              </a>
                            </li>
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="nav-icon far fa-dot-circle"></i>
                                <p>
                                  Listado General
                                </p>
                              </a>
                            </li>
                          </ul>
                        </li>
                      <?php } ?>
                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-circle"></i>
                          <p>
                            Resum. de Ing.xNombre
                          </p>
                        </a>
                      </li>
                    </ul>
                  </li>
                <?php } ?>
              </ul>
            </li>
          <?php } ?>

          <?php if (in_array(45, $permissions)) { ?>
            <li class="nav-item">
              <a href="gallery.html" class="nav-link">
                <i class="nav-icon fas fa-landmark"></i>
                <p>
                  Caja Bancos
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>

              <ul class="nav nav-treeview">
                <?php if (in_array(46, $permissions)) { ?>
                  <li class="nav-item">
                    <a href="./index2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Maestros
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <?php if (in_array(51, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Bancos
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(52, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Tipo Mvto.Bancario
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(53, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Parte Diario de Caja
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-circle"></i>
                          <p>
                            Conceptos de Descuento
                          </p>
                        </a>
                      </li>
                    </ul>
                  </li>
                <?php } ?>
                <?php if (in_array(47, $permissions)) { ?>
                  <li class="nav-item">
                    <a href="./index2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Movimientos
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>

                    <ul class="nav nav-treeview">
                      <?php if (in_array(54, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Giro de Cheq. Vouchers
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-circle"></i>
                          <p>
                            Cheque en CARTERA
                          </p>
                        </a>
                      </li>
                      <?php if (in_array(58, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Cheq. en PEND. COBR.
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(57, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Extracto Bancario
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(56, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Movimientos Bancarios
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(59, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Reg.Vouch.Rendir Cuenta
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                    </ul>
                  </li>
                <?php } ?>
                <?php if (in_array(48, $permissions)) { ?>
                  <li class="nav-item">
                    <a href="./index2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Consultas
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>

                    <ul class="nav nav-treeview">
                      <?php if (in_array(60, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Por Banco
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(61, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Numero de Analisis
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(62, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Referencia
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(63, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Por dia
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(64, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Saldo de Banco
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(65, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Cuenta Contable
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(66, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Plan de Cuentas
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(67, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Código Auxiliar
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(68, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Centro de Costos
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(69, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Documentos.de Referen.
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(70, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Tipo de Cambio
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(71, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Ficha de Socios
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(72, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Asientos Anexos
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                    </ul>
                  </li>
                <?php } ?>
                <?php if (in_array(49, $permissions)) { ?>
                  <li class="nav-item">
                    <a href="./index2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Reportes
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>

                    <ul class="nav nav-treeview">
                      <?php if (in_array(73, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Cheques Girados
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(74, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Flujo Diario
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(75, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Libro de Bancos
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(76, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Cheques Pendientes
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(77, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Por Estado de Cheques
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(78, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Vaucher por Socio
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(79, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Regul.Voucher Rend.Cta
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                    </ul>
                  </li>
                <?php } ?>
                <?php if (in_array(50, $permissions)) { ?>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Proceso
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <?php if (in_array(81, $permissions)) { ?>
                        <li class="nav-item">
                          <a href="./index2.html" class="nav-link">
                            <i class="fas fa-circle nav-icon"></i>
                            <p>
                              Gener.Asientos Anexos
                              <i class="right fas fa-angle-left"></i>
                            </p>
                          </a>

                          <ul class="nav nav-treeview">
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="nav-icon far fa-dot-circle"></i>
                                <p>
                                  Diferencia de Cambio
                                </p>
                              </a>
                            </li>
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="nav-icon far fa-dot-circle"></i>
                                <p>
                                  Gastos Bancarios
                                </p>
                              </a>
                            </li>
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="nav-icon far fa-dot-circle"></i>
                                <p>
                                  Inter. Libretas de Ahorrs
                                </p>
                              </a>
                            </li>
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="nav-icon far fa-dot-circle"></i>
                                <p>
                                  Trans. de Cuentas
                                </p>
                              </a>
                            </li>
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="nav-icon far fa-dot-circle"></i>
                                <p>
                                  Depósitos (G)
                                </p>
                              </a>
                            </li>
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="nav-icon far fa-dot-circle"></i>
                                <p>
                                  Planilla DIRECO-PNP
                                </p>
                              </a>
                            </li>
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="nav-icon far fa-dot-circle"></i>
                                <p>
                                  Planilla CAJA MILITAR
                                </p>
                              </a>
                            </li>
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="nav-icon far fa-dot-circle"></i>
                                <p>
                                  Planilla COMBUSTIBLE
                                </p>
                              </a>
                            </li>
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="nav-icon far fa-dot-circle"></i>
                                <p>
                                  Planilla OGA
                                </p>
                              </a>
                            </li>
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="nav-icon far fa-dot-circle"></i>
                                <p>
                                  Regul. de Vauchers
                                </p>
                              </a>
                            </li>
                          </ul>
                        </li>
                      <?php } ?>
                      <?php if (in_array(82, $permissions)) { ?>
                        <li class="nav-item">
                          <a href="./index2.html" class="nav-link">
                            <i class="fas fa-circle nav-icon"></i>
                            <p>
                              Transfe. Contable
                              <i class="right fas fa-angle-left"></i>
                            </p>
                          </a>

                          <ul class="nav nav-treeview">
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="nav-icon far fa-dot-circle"></i>
                                <p>
                                  Vouchers
                                </p>
                              </a>
                            </li>
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="nav-icon far fa-dot-circle"></i>
                                <p>
                                  Diferencia de Cambio
                                </p>
                              </a>
                            </li>
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="nav-icon far fa-dot-circle"></i>
                                <p>
                                  Gastos Bancarios
                                </p>
                              </a>
                            </li>
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="nav-icon far fa-dot-circle"></i>
                                <p>
                                  Intereses Libretas de Ahorros
                                </p>
                              </a>
                            </li>
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="nav-icon far fa-dot-circle"></i>
                                <p>
                                  Transferencias de Ctas.
                                </p>
                              </a>
                            </li>
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="nav-icon far fa-dot-circle"></i>
                                <p>
                                  Depósitos (T)
                                </p>
                              </a>
                            </li>
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="nav-icon far fa-dot-circle"></i>
                                <p>
                                  Planilla de la DIRECO
                                </p>
                              </a>
                            </li>
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="nav-icon far fa-dot-circle"></i>
                                <p>
                                  Planilla Caja Militar
                                </p>
                              </a>
                            </li>
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="nav-icon far fa-dot-circle"></i>
                                <p>
                                  Planilla Combustible
                                </p>
                              </a>
                            </li>
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="nav-icon far fa-dot-circle"></i>
                                <p>
                                  Planilla OGA
                                </p>
                              </a>
                            </li>
                          </ul>
                        </li>
                      <?php } ?>
                      <?php if (in_array(83, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Cierre Anual de Bancos
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(84, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Genera Parte Diario de Caja
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                    </ul>
                  </li>
                <?php } ?>
              </ul>
            </li>
          <?php } ?>

          <?php if (in_array(85, $permissions)) { ?>
            <li class="nav-item">
              <a href="gallery.html" class="nav-link">
                <i class="nav-icon fas fa-landmark"></i>
                <p>
                  Vivienda
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <?php if (in_array(86, $permissions)) { ?>
                  <li class="nav-item">
                    <a href="./index2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Maestros
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>

                    <ul class="nav nav-treeview">
                      <?php if (in_array(90, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Vivienda
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(91, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Titulación
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(92, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Archivo Documentos
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(93, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Tabla de Feriados
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(94, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Coeficientes de Interés
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(95, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Documentos Pesonales
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                    </ul>
                  </li>
                <?php } ?>
                <?php if (in_array(87, $permissions)) { ?>
                  <li class="nav-item">
                    <a href="./index2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Movimientos
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>

                    <ul class="nav nav-treeview">
                      <?php if (in_array(96, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Letras
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(97, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Aportaciones Vivienda
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(98, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              DISPONIBLE !!
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(99, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Transf/Permutas
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                    </ul>
                  </li>
                <?php } ?>
                <?php if (in_array(88, $permissions)) { ?>
                  <li class="nav-item">
                    <a href="./index2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Consultas
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>

                    <ul class="nav nav-treeview">
                      <?php if (in_array(100, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Fecha de Socios
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(101, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Programa c/s Título
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(102, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Prog.en Trám. x Tip.Minuta
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(103, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Prog. según tipo de Reg.
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(104, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Resú. de Títu. de Prop.
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(105, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Prog. Condicion de Título
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(106, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Estado de Cta. Cte.
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(107, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Orden de pago
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                    </ul>
                  </li>
                <?php } ?>
                <?php if (in_array(89, $permissions)) { ?>
                  <li class="nav-item">
                    <a href="./index2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Reportes
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>

                    <ul class="nav nav-treeview">
                      <?php if (in_array(108, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Por Orden Alfabetico
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(109, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Por Programa
                              <i class="right fas fa-angle-left"></i>
                            </p>
                          </a>

                          <ul class="nav nav-treeview">
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="nav-icon far fa-dot-circle"></i>
                                <p>
                                  Modo General
                                </p>
                              </a>
                            </li>
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="nav-icon far fa-dot-circle"></i>
                                <p>
                                  Modo Depurado
                                </p>
                              </a>
                            </li>
                          </ul>
                        </li>
                      <?php } ?>
                      <?php if (in_array(110, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Padrón General
                              <i class="right fas fa-angle-left"></i>
                            </p>
                          </a>

                          <ul class="nav nav-treeview">
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="nav-icon far fa-dot-circle"></i>
                                <p>
                                  Por Programa de Vivienda
                                </p>
                              </a>
                            </li>
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="nav-icon far fa-dot-circle"></i>
                                <p>
                                  Por Sit.Soc y Form.Pago
                                </p>
                              </a>
                            </li>
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="nav-icon far fa-dot-circle"></i>
                                <p>
                                  Por PNP [1..5]
                                </p>
                              </a>
                            </li>
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="nav-icon fas far fa-dot-circle"></i>
                                <p>
                                  Por CIVILES [6..9]
                                </p>
                              </a>
                            </li>
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="nav-icon far fa-dot-circle"></i>
                                <p>
                                  Adjudic. c/varios Prog.Vivienda
                                </p>
                              </a>
                            </li>
                          </ul>
                        </li>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Pad. Gral.x Prog./Fech.Adjud
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(111, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Pagos de Vivienda Det.
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(112, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Resu. de Pagos por Prog.
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(113, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Bolsa Vipolina
                              <i class="right fas fa-angle-left"></i>
                            </p>
                          </a>

                          <ul class="nav nav-treeview">
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="nav-icon far fa-dot-circle"></i>
                                <p>
                                  Control Bolsa Vipolina
                                </p>
                              </a>
                            </li>
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="nav-icon far fa-dot-circle"></i>
                                <p>
                                  Resumen Otorgados
                                </p>
                              </a>
                            </li>
                          </ul>
                        </li>
                      <?php } ?>
                      <?php if (in_array(114, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Descuentos Realizados
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(115, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Estado de Letras
                              <i class="right fas fa-angle-left"></i>
                            </p>
                          </a>

                          <ul class="nav nav-treeview">
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="nav-icon far fa-dot-circle"></i>
                                <p>
                                  Reporte General
                                </p>
                              </a>
                            </li>
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="nav-icon far fa-dot-circle"></i>
                                <p>
                                  Reporte x Fechas
                                </p>
                              </a>
                            </li>
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="nav-icon far fa-dot-circle"></i>
                                <p>
                                  Reporte Letras x Socio
                                </p>
                              </a>
                            </li>
                          </ul>
                        </li>
                      <?php } ?>
                      <?php if (in_array(116, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Por Instituc. y Programa
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(117, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Archivo de Documentos
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(118, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Documentos Personales
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(119, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Por Prog. y Forma de Pago
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                    </ul>
                  </li>
                <?php } ?>
              </ul>
            </li>
          <?php } ?>

          <?php if (in_array(120, $permissions)) { ?>
            <li class="nav-item">
              <a href="gallery.html" class="nav-link">
                <i class="nav-icon fas fa-landmark"></i>
                <p>
                  Serlav
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <?php if (in_array(121, $permissions)) { ?>
                  <li class="nav-item">
                    <a href="./index2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Maestros
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>

                    <ul class="nav nav-treeview">
                      <?php if (in_array(125, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Fichas Préstamos
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(126, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Nuevos Préstamos
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(127, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Pagos
                              <i class="right fas fa-angle-left"></i>
                            </p>
                          </a>

                          <ul class="nav nav-treeview">
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="nav-icon far fa-dot-circle"></i>
                                <p>
                                  Por Contabilidad
                                </p>
                              </a>
                            </li>
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="nav-icon far fa-dot-circle"></i>
                                <p>
                                  Por Garante Solidario
                                </p>
                              </a>
                            </li>
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="nav-icon far fa-dot-circle"></i>
                                <p>
                                  Por Regularizar
                                </p>
                              </a>
                            </li>
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="nav-icon far fa-dot-circle"></i>
                                <p>
                                  Por Planilla-Haberes
                                </p>
                              </a>
                            </li>
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="nav-icon far fa-dot-circle"></i>
                                <p>
                                  Por Dieta-Directivos
                                </p>
                              </a>
                            </li>
                          </ul>
                        </li>
                      <?php } ?>
                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-circle"></i>
                          <p>
                            Morosos
                          </p>
                        </a>
                      </li>
                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-circle"></i>
                          <p>
                            Rep.Morosidad Anterior
                          </p>
                        </a>
                      </li>
                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-circle"></i>
                          <p>
                            Benefi. x Fallecimiento
                          </p>
                        </a>
                      </li>
                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-circle"></i>
                          <p>
                            Carta Declar.de Benef.
                          </p>
                        </a>
                      </li>
                    </ul>
                  </li>
                <?php } ?>
                <?php if (in_array(122, $permissions)) { ?>
                  <li class="nav-item">
                    <a href="./index2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Movimientos
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>

                    <ul class="nav nav-treeview">
                      <?php if (in_array(128, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Cancelación de Préstamos
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-circle"></i>
                          <p>
                            Orden de Pago Por Caja
                          </p>
                        </a>
                      </li>
                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-circle"></i>
                          <p>
                            Servicios Otorgados
                            <i class="right fas fa-angle-left"></i>
                          </p>
                        </a>

                        <ul class="nav nav-treeview">
                          <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                              <i class="nav-icon far fa-dot-circle"></i>
                              <p>
                                Consumo
                                <i class="right fas fa-angle-left"></i>
                              </p>
                            </a>

                            <ul class="nav nav-treeview">
                              <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                  <i class="nav-icon fas fa-circle"></i>
                                  <p>
                                    Bolsa Vipolina
                                  </p>
                                </a>
                              </li>
                              <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                  <i class="nav-icon fas fa-circle"></i>
                                  <p>
                                    Panetón Vipolino
                                  </p>
                                </a>
                              </li>
                              <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                  <i class="nav-icon fas fa-circle"></i>
                                  <p>
                                    Canasta Navideña
                                  </p>
                                </a>
                              </li>
                              <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                  <i class="nav-icon fas fa-circle"></i>
                                  <p>
                                    Paquete Económico
                                  </p>
                                </a>
                              </li>
                            </ul>
                          </li>
                          <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                              <i class="nav-icon far fa-dot-circle"></i>
                              <p>
                                Convenios
                                <i class="right fas fa-angle-left"></i>
                              </p>
                            </a>

                            <ul class="nav nav-treeview">
                              <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                  <i class="nav-icon fas fa-circle"></i>
                                  <p>
                                    Paquete Turístico
                                  </p>
                                </a>
                              </li>
                              <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                  <i class="nav-icon fas fa-circle"></i>
                                  <p>
                                    Paquete Médico
                                  </p>
                                </a>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <?php if (in_array(129, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Eliminar Morosidad
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                    </ul>
                  </li>
                <?php } ?>
                <?php if (in_array(123, $permissions)) { ?>
                  <li class="nav-item">
                    <a href="./index2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Consultas
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>

                    <ul class="nav nav-treeview">
                      <?php if (in_array(130, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Pagos desde Caja
                              <i class="right fas fa-angle-left"></i>
                            </p>
                          </a>

                          <ul class="nav nav-treeview">
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="nav-icon far fa-dot-circle"></i>
                                <p>
                                  Seguro Fallecimiento
                                </p>
                              </a>
                            </li>
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="nav-icon far fa-dot-circle"></i>
                                <p>
                                  Préstamos
                                  <i class="right fas fa-angle-left"></i>
                                </p>
                              </a>

                              <ul class="nav nav-treeview">
                                <li class="nav-item has-treeview">
                                  <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-circle"></i>
                                    <p>
                                      No hay Nada
                                    </p>
                                  </a>
                                </li>
                              </ul>
                            </li>
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="nav-icon far fa-dot-circle"></i>
                                <p>
                                  Fondo Serlav
                                </p>
                              </a>
                            </li>
                          </ul>
                        </li>
                      <?php } ?>
                      <?php if (in_array(131, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Fecha de Socios
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(132, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Garantes
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(133, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Estado de Ctas Ctes
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(134, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Vaucher por Socio
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-circle"></i>
                          <p>
                            Dev.Dscto.IndebidoxCaja
                          </p>
                        </a>
                      </li>
                    </ul>
                  </li>
                <?php } ?>
                <?php if (in_array(124, $permissions)) { ?>
                  <li class="nav-item">
                    <a href="./index2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Reportes
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <?php if (in_array(135, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Por Orden Alfabetico
                              <i class="right fas fa-angle-left"></i>
                            </p>
                          </a>
                          <ul class="nav nav-treeview">
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="nav-icon far fa-dot-circle"></i>
                                <p>
                                  Listado General
                                </p>
                              </a>
                            </li>
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="nav-icon far fa-dot-circle"></i>
                                <p>
                                  Genrl c/det.Garantes
                                </p>
                              </a>
                            </li>
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="nav-icon far fa-dot-circle"></i>
                                <p>
                                  General c/Deuda
                                  <i class="right fas fa-angle-left"></i>
                                </p>
                              </a>
                              <ul class="nav nav-treeview">
                                <li class="nav-item has-treeview">
                                  <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-circle"></i>
                                    <p>
                                      Deuda Vencida
                                    </p>
                                  </a>
                                </li>
                                <li class="nav-item has-treeview">
                                  <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-circle"></i>
                                    <p>
                                      Deuda por Vencer
                                    </p>
                                  </a>
                                </li>
                              </ul>
                            </li>
                          </ul>
                        </li>
                      <?php } ?>
                      <?php if (in_array(136, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Soci.con Dctos Indebi.
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(137, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Socios Morosos
                              <i class="right fas fa-angle-left"></i>
                            </p>
                          </a>

                          <ul class="nav nav-treeview">
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="nav-icon far fa-dot-circle"></i>
                                <p>
                                  Préstamos Vencidos
                                </p>
                              </a>
                            </li>
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="nav-icon far fa-dot-circle"></i>
                                <p>
                                  Préstamos no Vencidos
                                </p>
                              </a>
                            </li>
                          </ul>
                        </li>
                      <?php } ?>
                      <?php if (in_array(138, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Desctos Efectuados
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(139, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Acum. Mensua.de Caja
                              <i class="right fas fa-angle-left"></i>
                            </p>
                          </a>
                          <ul class="nav nav-treeview">
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="nav-icon far fa-dot-circle"></i>
                                <p>
                                  Seguro de Fallecimiento
                                </p>
                              </a>
                            </li>
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="nav-icon far fa-dot-circle"></i>
                                <p>
                                  Prestamos
                                  <i class="right fas fa-angle-left"></i>
                                </p>
                              </a>
                              <ul class="nav nav-treeview">
                                <li class="nav-item has-treeview">
                                  <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-circle"></i>
                                    <p>
                                      No hay nada
                                    </p>
                                  </a>
                                </li>
                              </ul>
                            </li>
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="nav-icon far fa-dot-circle"></i>
                                <p>
                                  Fondo Serlav
                                </p>
                              </a>
                            </li>
                          </ul>
                        </li>
                      <?php } ?>
                      <?php if (in_array(140, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Garantes
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(141, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Préstamos Otorgados
                              <i class="right fas fa-angle-left"></i>
                            </p>
                          </a>
                          <ul class="nav nav-treeview">
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="nav-icon far fa-dot-circle"></i>
                                <p>
                                  Nuevos prest.Otorg.
                                </p>
                              </a>
                            </li>
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="nav-icon far fa-dot-circle"></i>
                                <p>
                                  Préstamos Otorgados
                                </p>
                              </a>
                            </li>
                          </ul>
                        </li>
                      <?php } ?>
                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-circle"></i>
                          <p>
                            Benef. de Fallecimiento
                          </p>
                        </a>
                      </li>
                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-circle"></i>
                          <p>
                            Servios Otorgados
                            <i class="right fas fa-angle-left"></i>
                          </p>
                        </a>
                        <ul class="nav nav-treeview">
                          <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                              <i class="nav-icon far fa-dot-circle"></i>
                              <p>
                                Consumo
                                <i class="right fas fa-angle-left"></i>
                              </p>
                            </a>
                            <ul class="nav nav-treeview">
                              <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                  <i class="nav-icon far fa-circle"></i>
                                  <p>
                                    Bolsa Vipolina
                                    <i class="right fas fa-angle-left"></i>
                                  </p>
                                </a>
                                <ul class="nav nav-treeview">
                                  <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                      <i class="nav-icon fas fa-circle"></i>
                                      <p>
                                        Control Bolsa
                                      </p>
                                    </a>
                                  </li>
                                  <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                      <i class="nav-icon fas fa-circle"></i>
                                      <p>
                                        Resumen Otorgados
                                      </p>
                                    </a>
                                  </li>
                                </ul>
                              </li>
                              <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                  <i class="nav-icon far fa-circle"></i>
                                  <p>
                                    Panetón Vipolino
                                    <i class="right fas fa-angle-left"></i>
                                  </p>
                                </a>
                                <ul class="nav nav-treeview">
                                  <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                      <i class="nav-icon fas fa-circle"></i>
                                      <p>
                                        Control Panetón
                                      </p>
                                    </a>
                                  </li>
                                  <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                      <i class="nav-icon fas fa-circle"></i>
                                      <p>
                                        Resumen Otorgados
                                      </p>
                                    </a>
                                  </li>
                                </ul>
                              </li>
                              <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                  <i class="nav-icon far fa-circle"></i>
                                  <p>
                                    Canasta Navideña
                                    <i class="right fas fa-angle-left"></i>
                                  </p>
                                </a>
                                <ul class="nav nav-treeview">
                                  <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                      <i class="nav-icon fas fa-circle"></i>
                                      <p>
                                        Control Canasta
                                      </p>
                                    </a>
                                  </li>
                                  <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                      <i class="nav-icon fas fa-circle"></i>
                                      <p>
                                        Resumen Otorgados
                                      </p>
                                    </a>
                                  </li>
                                </ul>
                              </li>
                              <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                  <i class="nav-icon far fa-circle"></i>
                                  <p>
                                    Paquete Económico
                                    <i class="right fas fa-angle-left"></i>
                                  </p>
                                </a>
                                <ul class="nav nav-treeview">
                                  <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                      <i class="nav-icon fas fa-circle"></i>
                                      <p>
                                        Control Paquete
                                      </p>
                                    </a>
                                  </li>
                                  <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                      <i class="nav-icon fas fa-circle"></i>
                                      <p>
                                        Resumen Otorgados
                                      </p>
                                    </a>
                                  </li>
                                </ul>
                              </li>
                            </ul>
                          </li>
                          <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                              <i class="nav-icon far fa-dot-circle"></i>
                              <p>
                                Convenio
                                <i class="right fas fa-angle-left"></i>
                              </p>
                            </a>
                            <ul class="nav nav-treeview">
                              <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                  <i class="nav-icon far fa-circle"></i>
                                  <p>
                                    Paquete Turístico
                                    <i class="right fas fa-angle-left"></i>
                                  </p>
                                </a>
                                <ul class="nav nav-treeview">
                                  <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                      <i class="nav-icon fas fa-circle"></i>
                                      <p>
                                        Control Turístic
                                      </p>
                                    </a>
                                  </li>
                                  <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                      <i class="nav-icon fas fa-circle"></i>
                                      <p>
                                        Resumen Otorgados
                                      </p>
                                    </a>
                                  </li>
                                </ul>
                              </li>
                              <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                  <i class="nav-icon far fa-circle"></i>
                                  <p>
                                    Paquete Médico
                                    <i class="right fas fa-angle-left"></i>
                                  </p>
                                </a>
                                <ul class="nav nav-treeview">
                                  <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                      <i class="nav-icon fas fa-circle"></i>
                                      <p>
                                        Control Médico
                                      </p>
                                    </a>
                                  </li>
                                  <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                      <i class="nav-icon fas fa-circle"></i>
                                      <p>
                                        Resumen Otorgados
                                      </p>
                                    </a>
                                  </li>
                                </ul>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-circle"></i>
                          <p>
                            Pagos por
                            <i class="right fas fa-angle-left"></i>
                          </p>
                        </a>
                        <ul class="nav nav-treeview">
                          <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                              <i class="nav-icon far fa-dot-circle"></i>
                              <p>
                                Refinanciamiento
                              </p>
                            </a>
                          </li>
                          <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                              <i class="nav-icon far fa-dot-circle"></i>
                              <p>
                                Planilla Haberes
                              </p>
                            </a>
                          </li>
                          <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                              <i class="nav-icon far fa-dot-circle"></i>
                              <p>
                                Dietas Directivos
                              </p>
                            </a>
                          </li>
                          <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                              <i class="nav-icon far fa-dot-circle"></i>
                              <p>
                                Regularizaciones
                              </p>
                            </a>
                          </li>
                          <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                              <i class="nav-icon far fa-dot-circle"></i>
                              <p>
                                Garantes Solidarios
                              </p>
                            </a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                <?php } ?>
              </ul>
            </li>
          <?php } ?>

          <?php if (in_array(142, $permissions)) { ?>
            <li class="nav-item">
              <a href="gallery.html" class="nav-link">
                <i class="nav-icon fas fa-hand-holding-usd"></i>
                <p>
                  Ctas Corrientes
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <?php if (in_array(143, $permissions)) { ?>
                  <li class="nav-item">
                    <a href="./index2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Maestros
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>

                    <ul class="nav nav-treeview">
                      <?php if (in_array(147, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Pagos x Contabilidad
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(148, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Aportaciones Vivienda
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(149, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Actualización Socios
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(150, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Acumulado Apertura
                            </p>
                          </a>
                        </li>
                      <?php } ?>

                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-circle"></i>
                          <p>
                            Movimientos OGA
                          </p>
                        </a>
                      </li>
                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-circle"></i>
                          <p>
                            Mvtos-Regularizaciones
                          </p>
                        </a>
                      </li>
                    </ul>
                  </li>
                <?php } ?>
                <?php if (in_array(144, $permissions)) { ?>
                  <li class="nav-item">
                    <a href="./index2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Consultas
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>

                    <ul class="nav nav-treeview">
                      <?php if (in_array(151, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Ficha de Socios
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(152, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Voucher por Socio
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                    </ul>
                  </li>
                <?php } ?>
                <?php if (in_array(145, $permissions)) { ?>
                  <li class="nav-item">
                    <a href="./index2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Orden de Pago
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>

                    <ul class="nav nav-treeview">
                      <?php if (in_array(153, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Estado de Cta Cte
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(154, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Orden de Pago
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(155, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Orden de Pago Especial
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(156, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Dctos Programados
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-circle"></i>
                          <p>
                            Control de Liquidaciones
                          </p>
                        </a>
                      </li>
                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-circle"></i>
                          <p>
                            Liquidación Socio
                          </p>
                        </a>
                      </li>
                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-circle"></i>
                          <p>
                            Orden por Ing/Transf/Adjund
                          </p>
                        </a>
                      </li>
                    </ul>
                  </li>
                <?php } ?>
                <?php if (in_array(146, $permissions)) { ?>
                  <li class="nav-item">
                    <a href="./index2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Reportes
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <?php if (in_array(157, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Pagos Acum.x Cód Descto
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(158, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Pagos Acum.x Socios
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(159, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Control de Pagos x Caja
                              <i class="right fas fa-angle-left"></i>
                            </p>
                          </a>
                          <ul class="nav nav-treeview">
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="nav-icon far fa-dot-circle"></i>
                                <p>
                                  Con interes
                                </p>
                              </a>
                            </li>
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="nav-icon far fa-dot-circle"></i>
                                <p>
                                  Sin interes
                                </p>
                              </a>
                            </li>
                          </ul>
                        </li>
                      <?php } ?>
                      <?php if (in_array(160, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Proyectado
                              <i class="right fas fa-angle-left"></i>
                            </p>
                          </a>
                          <ul class="nav nav-treeview">
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="nav-icon far fa-dot-circle"></i>
                                <p>
                                  Proyectado Detallado
                                </p>
                              </a>
                            </li>
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="nav-icon far fa-dot-circle"></i>
                                <p>
                                  Proyectado Real (Ap)
                                </p>
                              </a>
                            </li>
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="nav-icon far fa-dot-circle"></i>
                                <p>
                                  Proyectado Real (Mz)
                                </p>
                              </a>
                            </li>
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="nav-icon far fa-dot-circle"></i>
                                <p>
                                  Proyect. Real (Ap) s/0 Acum.
                                </p>
                              </a>
                            </li>
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="nav-icon far fa-dot-circle"></i>
                                <p>
                                  Proyect. Real (Ap) s/0 Saldos
                                </p>
                              </a>
                            </li>
                          </ul>
                        </li>
                      <?php } ?>
                      <?php if (in_array(161, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Acum.MesxPll(s) Direco/cMilPol x Dscto.
                              <i class="right fas fa-angle-left"></i>
                            </p>
                          </a>
                          <ul class="nav nav-treeview">
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="nav-icon far fa-dot-circle"></i>
                                <p>
                                  Direco y Caja Militar
                                </p>
                              </a>
                            </li>
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="nav-icon far fa-dot-circle"></i>
                                <p>
                                  Solo Direco
                                </p>
                              </a>
                            </li>
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="nav-icon far fa-dot-circle"></i>
                                <p>
                                  Solo Caja militar
                                </p>
                              </a>
                            </li>
                          </ul>
                        </li>
                      <?php } ?>
                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-circle"></i>
                          <p>
                            Padrón Gral.Espec. x Program.
                          </p>
                        </a>
                      </li>
                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-circle"></i>
                          <p>
                            Detalle Planilla OGA
                          </p>
                        </a>
                      </li>
                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-circle"></i>
                          <p>
                            Resumen Planilla OGA
                          </p>
                        </a>
                      </li>
                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-circle"></i>
                          <p>
                            Detalle Movi-Regularz
                          </p>
                        </a>
                      </li>
                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-circle"></i>
                          <p>
                            Resumen Movi-Regularz
                          </p>
                        </a>
                      </li>
                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-circle"></i>
                          <p>
                            Por Cod Descuento
                          </p>
                        </a>
                      </li>
                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-circle"></i>
                          <p>
                            Importe Mensual Programado
                            <i class="right fas fa-angle-left"></i>
                          </p>
                        </a>

                        <ul class="nav nav-treeview">
                          <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                              <i class="nav-icon far fa-dot-circle"></i>
                              <p>
                                Padron Forma General
                              </p>
                            </a>
                          </li>
                          <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                              <i class="nav-icon far fa-dot-circle"></i>
                              <p>
                                Padron Programas de Vivien.
                              </p>
                            </a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                <?php } ?>
              </ul>
            </li>
          <?php } ?>

          <?php if (in_array(162, $permissions)) { ?>
            <li class="nav-item">
              <a href="gallery.html" class="nav-link">
                <i class="nav-icon fas fa-hand-holding-usd"></i>
                <p>
                  Recuperaciones
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <?php if (in_array(163, $permissions)) { ?>
                  <li class="nav-item">
                    <a href="./index2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Maestros
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>

                    <ul class="nav nav-treeview">
                      <?php if (in_array(167, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Archivo de Control
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                    </ul>
                  </li>
                <?php } ?>
                <?php if (in_array(164, $permissions)) { ?>
                  <li class="nav-item">
                    <a href="./index2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Movimientos
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">

                      <?php if (in_array(168, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Notificaciones
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(169, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Cronograma de Pagos
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-circle"></i>
                          <p>
                            Genera Deuda y Mora
                          </p>
                        </a>
                      </li>
                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-circle"></i>
                          <p>
                            Genera Deuda: Renunc/Fallec/Liquid
                          </p>
                        </a>
                      </li>
                    </ul>
                  </li>
                <?php } ?>
                <?php if (in_array(165, $permissions)) { ?>
                  <li class="nav-item">
                    <a href="./index2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Consultas
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>

                    <ul class="nav nav-treeview">
                      <?php if (in_array(170, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Ficha de Socios
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(171, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Estado de Cta Cte
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(172, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Ordenes de Pago
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                      <?php if (in_array(173, $permissions)) { ?>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Resum.Ingr.xDia x Progr.
                            </p>
                          </a>
                        </li>
                      <?php } ?>
                    </ul>
                  </li>
                <?php } ?>
                <?php if (in_array(166, $permissions)) { ?>
                  <li class="nav-item">
                    <a href="./index2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Reportes
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-circle"></i>
                          <p>
                            Grup. de Reprts con Deudas
                            <i class="right fas fa-angle-left"></i>
                          </p>
                        </a>
                        <ul class="nav nav-treeview">
                          <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                              <i class="nav-icon far fa-dot-circle"></i>
                              <p>
                                Deudas.xAportes y Prog de Viv
                              </p>
                            </a>
                          </li>
                          <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                              <i class="nav-icon far fa-dot-circle"></i>
                              <p>
                                Deudas.xAportes y Prog de Viv x Monto
                              </p>
                            </a>
                          </li>
                          <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                              <i class="nav-icon far fa-dot-circle"></i>
                              <p>
                                Deudas.xProg de Viv x Cod. Descuento
                              </p>
                            </a>
                          </li>
                          <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                              <i class="nav-icon far fa-dot-circle"></i>
                              <p>
                                Deudas.Gto Adm(x Prog de Viv)
                              </p>
                            </a>
                          </li>
                          <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                              <i class="nav-icon far fa-dot-circle"></i>
                              <p>
                                Deudas+Prog Mensual(xCod de Prog Viv)
                              </p>
                            </a>
                          </li>
                          <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                              <i class="nav-icon far fa-dot-circle"></i>
                              <p>
                                Reporte Especial OPREC
                              </p>
                            </a>
                          </li>
                          <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                              <i class="nav-icon far fa-dot-circle"></i>
                              <p>
                                Deudas de Forma Resum. xCod Descto
                              </p>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <?php if (in_array(174, $permissions)) { ?>
                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-circle"></i>
                          <p>
                            Notificaciones por Programa
                          </p>
                        </a>
                      </li>
                      <?php } ?>
                      <?php if (in_array(176, $permissions)) { ?>
                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-circle"></i>
                          <p>
                            Saldos Pendientes por Prog
                          </p>
                        </a>
                      </li>
                      <?php } ?>
                      <?php if (in_array(178, $permissions)) { ?>
                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-circle"></i>
                          <p>
                            >>.. Imprimir Notificaciones ..<< 
                          </p> 
                        </a> 
                      </li>
                      <?php } ?>
                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-circle"></i>
                          <p>
                            Padŕon Gral de Socios x Prog(Notif.)
                          </p>
                        </a>
                      </li>
                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-circle"></i>
                          <p>
                            Padrón Gral de Socios x Prog(SitSoc.)
                          </p>
                        </a>
                      </li>
                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-circle"></i>
                          <p>
                            Notifi. por Prog+Importe
                          </p>
                        </a>
                      </li>
                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-circle"></i>
                          <p>
                            Listado por Deuda Atrasad. y Morosi.
                            <i class="right fas fa-angle-left"></i>
                          </p>
                        </a>
                        <ul class="nav nav-treeview">
                          <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                              <i class="nav-icon far fa-dot-circle"></i>
                              <p>
                                En Forma General
                              </p>
                            </a>
                          </li>
                          <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                              <i class="nav-icon far fa-dot-circle"></i>
                              <p>
                                Por Prog de Viv
                              </p>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-circle"></i>
                          <p>
                            List.xDeud.Atras.y Moros.(Ren/Fall/Excl)
                          </p>
                        </a>
                      </li>
                    </ul>
                  </li>
                <?php } ?>
              </ul>
            </li>
          <?php } ?>

          <?php if (in_array(180, $permissions)) { ?>
            <li class="nav-item">
              <a href="gallery.html" class="nav-link">
                <i class="nav-icon fas fa-vote-yea"></i>
                <p>
                  Electoral
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <?php if (in_array(181, $permissions)) { ?>
                <li class="nav-item">
                  <a href="./index2.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                      Movimientos
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <?php if (in_array(185, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          IngresosxMulta
                        </p>
                      </a>
                    </li>
                    <?php } ?>
                  </ul>
                </li>
                <?php } ?>
                <?php if (in_array(182, $permissions)) { ?>
                <li class="nav-item">
                  <a href="./index2.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                      Consultas
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>

                  <ul class="nav nav-treeview">
                    <?php if (in_array(186, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Ficha de Socios
                        </p>
                      </a>
                    </li>
                    <?php } ?>
                    <?php if (in_array(187, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Estado de Cta Cte
                        </p>
                      </a>
                    </li>
                    <?php } ?>
                  </ul>
                </li>
                <?php } ?>
                <?php if (in_array(183, $permissions)) { ?>
                <li class="nav-item">
                  <a href="./index2.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                      Reportes
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>

                  <ul class="nav nav-treeview">
                    <?php if (in_array(188, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Socios Afectos a Multas
                        </p>
                      </a>
                    </li>
                    <?php } ?>
                    <?php if (in_array(189, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Padrón Gral SociosxProg.Global
                        </p>
                      </a>
                    </li>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Padrón Gral SociosxProg.Electo.
                        </p>
                      </a>
                    </li>
                    <?php } ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Generacio TxT
                        </p>
                      </a>
                    </li>
                  </ul>
                </li>
                <?php } ?>
                <?php if (in_array(184, $permissions)) { ?>
                <li class="nav-item">
                  <a href="./index2.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                      Proceso
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <?php if (in_array(190, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Cambio Fecha Proseso
                        </p>
                      </a>
                    </li>
                    <?php } ?>
                    <?php if (in_array(191, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Transf. a Dscto Vivienda
                        </p>
                      </a>
                    </li>
                    <?php } ?>
                  </ul>
                </li>
                <?php } ?>
              </ul>
            </li>
          <?php } ?>
          <?php if (in_array(192, $permissions)) { ?>
            <li class="nav-item">
              <a href="gallery.html" class="nav-link">
                <i class="nav-icon fas fa-warehouse"></i>
                <p>
                  Almacenes
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <?php if (in_array(193, $permissions)) { ?>
                <li class="nav-item">
                  <a href="./index2.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                      Maestros
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <?php if (in_array(198, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Almacen/Logistica
                        </p>
                      </a>
                    </li>
                    <?php } ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Servicios
                        </p>
                      </a>
                    </li>
                    <?php if (in_array(199, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Proveedores
                        </p>
                      </a>
                    </li>
                    <?php } ?>
                    <?php if (in_array(200, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Activos Fijos
                        </p>
                      </a>
                    </li>
                    <?php } ?>
                    <?php if (in_array(201, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Dist. Activos Fijos
                        </p>
                      </a>
                    </li>
                    <?php } ?>
                  </ul>
                </li>
                <?php } ?>
                <?php if (in_array(194, $permissions)) { ?>
                <li class="nav-item">
                  <a href="./index2.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                      Movimientos
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>

                  <ul class="nav nav-treeview">
                    <?php if (in_array(202, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Ingresos/Salidas Almacenes
                        </p>
                      </a>
                    </li>
                    <?php } ?>
                    <?php if (in_array(203, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Fotocopias
                        </p>
                      </a>
                    </li>
                    <?php } ?>
                    <?php if (in_array(202, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Ingresos/Salidas Servicios
                        </p>
                      </a>
                    </li>
                    <?php } ?>
                  </ul>
                </li>
                <?php } ?>
                <?php if (in_array(195, $permissions)) { ?>
                <li class="nav-item">
                  <a href="./index2.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                      Procesos
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>

                  <ul class="nav nav-treeview">
                    <?php if (in_array(204, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Actualiza Saldos Almacen
                        </p>
                      </a>
                    </li>
                    <?php } ?>
                    <?php if (in_array(205, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Recálc.Prec.Fin de Año Alm
                        </p>
                      </a>
                    </li>
                    <?php } ?>
                    <?php if (in_array(206, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Transf. Saldos Almacen
                        </p>
                      </a>
                    </li>
                    <?php } ?>
                    <?php if (in_array(204, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Actualiza Saldos Servicios
                        </p>
                      </a>
                    </li>
                    <?php } ?>
                    <?php if (in_array(205, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Recálc.Precio Fin de Año Ser
                        </p>
                      </a>
                    </li>
                    <?php } ?>
                    <?php if (in_array(206, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Transf.Saldos Servicios
                        </p>
                      </a>
                    </li>
                    <?php } ?>
                  </ul>
                </li>
                <?php } ?>
                <?php if (in_array(196, $permissions)) { ?>
                <li class="nav-item">
                  <a href="./index2.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                      Reportes
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <?php if (in_array(207, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Kardex Cantidades
                          <i class="right fas fa-angle-left"></i>
                        </p>
                      </a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon far fa-dot-circle"></i>
                            <p>
                              Almacenes
                            </p>
                          </a>
                        </li>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon far fa-dot-circle"></i>
                            <p>
                              Servicios
                            </p>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <?php } ?>
                    <?php if (in_array(208, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Kardex Valorizado
                          <i class="right fas fa-angle-left"></i>
                        </p>
                      </a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon far fa-dot-circle"></i>
                            <p>
                              Almacenes
                            </p>
                          </a>
                        </li>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon far fa-dot-circle"></i>
                            <p>
                              Servicios
                            </p>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <?php } ?>
                    <?php if (in_array(209, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Consum. ArticuxAreas
                          <i class="right fas fa-angle-left"></i>
                        </p>
                      </a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon far fa-dot-circle"></i>
                            <p>
                              Almacenes
                            </p>
                          </a>
                        </li>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon far fa-dot-circle"></i>
                            <p>
                              Servicios
                            </p>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <?php } ?>
                    <?php if (in_array(210, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Compras x Proveedor
                          <i class="right fas fa-angle-left"></i>
                        </p>
                      </a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon far fa-dot-circle"></i>
                            <p>
                              Almacenes
                            </p>
                          </a>
                        </li>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon far fa-dot-circle"></i>
                            <p>
                              Servicios
                            </p>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <?php } ?>
                    <?php if (in_array(211, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Saldos Mes Actual
                          <i class="right fas fa-angle-left"></i>
                        </p>
                      </a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon far fa-dot-circle"></i>
                            <p>
                              Almacenes
                            </p>
                          </a>
                        </li>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon far fa-dot-circle"></i>
                            <p>
                              Servicios
                            </p>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <?php } ?>
                    <?php if (in_array(212, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Saldos Mes Anterior
                          <i class="right fas fa-angle-left"></i>
                        </p>
                      </a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon far fa-dot-circle"></i>
                            <p>
                              Almacenes
                            </p>
                          </a>
                        </li>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon far fa-dot-circle"></i>
                            <p>
                              Servicios
                            </p>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <?php } ?>
                    <?php if (in_array(213, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Alerta Stocks
                          <i class="right fas fa-angle-left"></i>
                        </p>
                      </a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon far fa-dot-circle"></i>
                            <p>
                              Almacenes
                            </p>
                          </a>
                        </li>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon far fa-dot-circle"></i>
                            <p>
                              Servicios
                            </p>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <?php } ?>
                    <?php if (in_array(214, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Toma de Invetarios
                          <i class="right fas fa-angle-left"></i>
                        </p>
                      </a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon far fa-dot-circle"></i>
                            <p>
                              Almacenes
                            </p>
                          </a>
                        </li>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon far fa-dot-circle"></i>
                            <p>
                              Servicios
                            </p>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <?php } ?>
                    <?php if (in_array(215, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Cruce de Invetarios
                          <i class="right fas fa-angle-left"></i>
                        </p>
                      </a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon far fa-dot-circle"></i>
                            <p>
                              Almacenes
                            </p>
                          </a>
                        </li>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon far fa-dot-circle"></i>
                            <p>
                              Servicios
                            </p>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <?php } ?>
                    <?php if (in_array(216, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Fotocopias
                        </p>
                      </a>
                    </li>
                    <?php } ?>
                  </ul>
                </li>
                <?php } ?>
              </ul>
            </li>
          <?php } ?>

          <?php if (in_array(218, $permissions)) { ?>
            <li class="nav-item">
              <a href="gallery.html" class="nav-link">
                <i class="nav-icon fas fa-paste"></i>
                <p>
                  Plantillas
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <?php if (in_array(219, $permissions)) { ?>
                <li class="nav-item">
                  <a href="./index2.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                      Maestros
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>

                  <ul class="nav nav-treeview">
                    <?php if (in_array(224, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Personal
                        </p>
                      </a>
                    </li>
                    <?php } ?>
                    <?php if (in_array(225, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Conceptos
                        </p>
                      </a>
                    </li>
                    <?php } ?>
                    <?php if (in_array(226, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          AFP's
                        </p>
                      </a>
                    </li>
                    <?php } ?>
                    <?php if (in_array(227, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Concep. AFP's
                        </p>
                      </a>
                    </li>
                    <?php } ?>
                    <?php if (in_array(228, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Formulas de Conceptos
                        </p>
                      </a>
                    </li>
                    <?php } ?>
                    <?php if (in_array(229, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Patron de Formulas
                        </p>
                      </a>
                    </li>
                    <?php } ?>
                    <?php if (in_array(230, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Situacion Laboral
                        </p>
                      </a>
                    </li>
                    <?php } ?>
                    <?php if (in_array(231, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Cuentas de Asiento Conta.
                        </p>
                      </a>
                    </li>
                    <?php } ?>
                  </ul>
                </li>
                <?php } ?>
                <?php if (in_array(220, $permissions)) { ?>
                <li class="nav-item">
                  <a href="./index2.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                      Movimientos
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>

                  <ul class="nav nav-treeview">
                    <?php if (in_array(232, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Conceptos Fijos/Variables
                        </p>
                      </a>
                    </li>
                    <?php } ?>
                    <?php if (in_array(233, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Registro Asistencia
                        </p>
                      </a>
                    </li>
                    <?php } ?>
                    <?php if (in_array(234, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Adelanto Quincena
                        </p>
                      </a>
                    </li>
                    <?php } ?>
                    <?php if (in_array(235, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Cuenta Corriente
                        </p>
                      </a>
                    </li>
                    <?php } ?>
                  </ul>
                </li>
                <?php } ?>
                <?php if (in_array(221, $permissions)) { ?>
                <li class="nav-item">
                  <a href="./index2.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                      Procesos
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>

                  <ul class="nav nav-treeview">
                    <?php if (in_array(236, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Cálculo Planilla
                        </p>
                      </a>
                    </li>
                    <?php } ?>
                    <?php if (in_array(237, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Cierre Periodo
                        </p>
                      </a>
                    </li>
                    <?php } ?>
                    <?php if (in_array(238, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Transf.Vacaciones
                        </p>
                      </a>
                    </li>
                    <?php } ?>
                    <?php if (in_array(239, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Transf.Gratificaciones
                        </p>
                      </a>
                    </li>
                    <?php } ?>
                    <?php if (in_array(240, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Transf.Contabilidad
                          <i class="right fas fa-angle-left"></i>
                        </p>
                      </a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon far fa-dot-circle"></i>
                            <p>
                              Normal Gratificaciones
                            </p>
                          </a>
                        </li>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon far fa-dot-circle"></i>
                            <p>
                              Vacaciones
                            </p>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <?php } ?>
                    <?php if (in_array(241, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Transf.Bolsa Vipol
                        </p>
                      </a>
                    </li>
                    <?php } ?>
                    <?php if (in_array(242, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Tope de Adelanto
                        </p>
                      </a>
                    </li>
                    <?php } ?>
                  </ul>
                </li>
                <?php } ?>
                <?php if (in_array(222, $permissions)) { ?>
                <li class="nav-item">
                  <a href="./index2.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                      Reportes
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <?php if (in_array(243, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Mvto.Planilla Calculada
                        </p>
                      </a>
                    </li>
                    <?php } ?>
                    <?php if (in_array(244, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Pre Planilla Calculada
                        </p>
                      </a>
                    </li>
                    <?php } ?>
                    <?php if (in_array(245, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Boleta de Pagos
                        </p>
                      </a>
                    </li>
                    <?php } ?>
                    <?php if (in_array(246, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Resumen x Concepto
                        </p>
                      </a>
                    </li>
                    <?php } ?>
                    <?php if (in_array(247, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Adelanto de Quincena
                        </p>
                      </a>
                    </li>
                    <?php } ?>
                    <?php if (in_array(248, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Libro Planilla
                        </p>
                      </a>
                    </li>
                    <?php } ?>
                    <?php if (in_array(249, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Declarac.Jurada IPSS
                        </p>
                      </a>
                    </li>
                    <?php } ?>
                    <?php if (in_array(250, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Aportes Previsionales AFP's
                        </p>
                      </a>
                    </li>
                    <?php } ?>
                    <?php if (in_array(251, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Asiento Contable
                        </p>
                      </a>
                    </li>
                    <?php } ?>
                    <?php if (in_array(252, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Descto.Cta.Cte por Periodo
                        </p>
                      </a>
                    </li>
                    <?php } ?>
                    <?php if (in_array(253, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Concepto por Personal Calculado
                        </p>
                      </a>
                    </li>
                    <?php } ?>
                    <?php if (in_array(254, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Neto Percibido
                        </p>
                      </a>
                    </li>
                    <?php } ?>
                    <?php if (in_array(256, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Adelantos Recibidos Provis.Caja
                        </p>
                      </a>
                    </li>
                    <?php } ?>
                    <?php if (in_array(257, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Recibos Rendicion de Cuenta
                        </p>
                      </a>
                    </li>
                    <?php } ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Formato Planilla
                        </p>
                      </a>
                    </li>
                    <?php if (in_array(248, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Libro Planilla Nuevo
                        </p>
                      </a>
                    </li>
                    <?php } ?>
                  </ul>
                </li>
                <?php } ?>
                <?php if (in_array(223, $permissions)) { ?>
                <li class="nav-item">
                  <a href="./index2.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                      Soporte
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Cambio Fecha Proceso
                        </p>
                      </a>
                    </li>
                    <?php if (in_array(257, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Cambiar Estado de Personal
                        </p>
                      </a>
                    </li>
                    <?php } ?>
                    <?php if (in_array(258, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Selec. Planilla y Proceso
                        </p>
                      </a>
                    </li>
                    <?php } ?>
                    <?php if (in_array(259, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Selec. Periodo Calculado
                        </p>
                      </a>
                    </li>
                    <?php } ?>
                    <?php if (in_array(260, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Genera Periodos de Cálculo
                        </p>
                      </a>
                    </li>
                    <?php } ?>
                    <?php if (in_array(261, $permissions)) { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                          Periodos Transf. a Contabilidad
                        </p>
                      </a>
                    </li>
                    <?php } ?>
                  </ul>
                </li>
                <?php } ?>
              </ul>
            </li>
          <?php } ?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>