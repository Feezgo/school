<?php

namespace School\App\Repositorios\Estudiantes;

public interface EstudianteInterface {

	public function crear(array $estudiante);

	public function editar(array $estudiante);

	public function obtener($id);

	public function agregarHistorialAcademico(array $historial);

	public function removerHistorialAcademico($id_historial);
}