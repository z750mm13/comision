<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
  <div class="container-fluid">
      <div class="header-body">
          <!-- Card stats -->
          <div class="row">
              <div class="col-12"><h1 class="text-white">Normas</h1></div>
              <div class="col-xl-6">
                  <div class="card card-stats mb-4 mb-xl-0">
                      <div class="card-body">
                          <div class="row">
                              <div class="col">
                                  <h5 class="card-title text-uppercase text-muted mb-0">Normas cumplidas</h5>
                                  <span class="h2 font-weight-bold mb-0">{{$total->cumplimientos.',00'}}</span>
                              </div>
                              <div class="col-auto">
                                  <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                      <i class="fas fa-chart-bar"></i>
                                  </div>
                              </div>
                          </div>
                          <p class="mt-3 mb-0 text-muted text-sm">
                              <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> {{round((100/$total->avance)*$total->cumplimientos,2)}}%</span>
                              <span class="text-nowrap">Avance en las normas</span>
                          </p>
                      </div>
                  </div>
              </div>
              <div class="col-xl-6">
                  <div class="card card-stats mb-4 mb-xl-0">
                      <div class="card-body">
                          <div class="row">
                              <div class="col">
                                  <h5 class="card-title text-uppercase text-muted mb-0">Metas</h5>
                                  <span class="h2 font-weight-bold mb-0">{{$totalrequisitos/100 * ($goal? $goal->porcentaje : 0) }}</span>
                              </div>
                              <div class="col-auto">
                                  <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                                      <i class="fas fa-chart-pie"></i>
                                  </div>
                              </div>
                          </div>
                          <p class="mt-3 mb-0 text-muted text-sm">
                              <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> {{($goal? $goal->porcentaje:0). '%'}}</span>
                              <span class="text-nowrap">Meta porcentual</span>
                          </p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>